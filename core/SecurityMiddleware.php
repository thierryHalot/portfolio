<?php
namespace BWB\Framework\mvc;

use Exception;
use Firebase\JWT\JWT;
use UserInterface;

/**
 * Le security middleware permet de s'occuper de l'identification du client
 * il s'appuie sur le JWT lors de la connexion pour faire transiter le token
 * avec les cookies.
 * 
 * Il propose la configuration par defaut (intégré dans le controlleur)
 * 
 * 
 *
 * @author loic
 */
class SecurityMiddleware {

    /**
     * 
     * @var array informations qui transitent entre le client et le serveur
     */
    private $payload;

    /**
     *
     * @var string La passphrase (il est important de la passer dans un 
     * mecanisme de hachage pour plus de securité
     *   
     */
    private $passport = "Bonjour a tous";

    /**
     *
     * @var int durée du token. Par défaut 24h
     */
    private $expiration = (60*60*24);

    /**
     * Setter pour modifier l'expiration du token
     * @param int $expiration
     */
    public function setExpiration($expiration) {
        $this->expiration = $expiration;
    }

    /**
     * Genere un token basé sur l'utilisateur passé en argument
     * et encapsule le cookie dans l'en-tête de la réponse.
     * 
     * Le cookie généré est disponible pour le domaine complet
     * 
     * @param UserInterface $user L'utilisateur pour lequel le token est généré
     * 
     * @return string Le token généré
     */
    public function generateToken($user) {
        $this->payload = array(
            "username" => $user->getUsername(),
            "roles" => $user->getRoles(),
            "exp" => time() + $this->expiration
        );
        $tkn = JWT::encode($this->payload, $this->passport);
        setcookie("tkn", $tkn, $this->payload['exp'], "http://" . $_SERVER['SERVER_NAME']);
        return $tkn;
        
    }

    /**
     * verifie l'integrité du token envoyé par le client
     * 
     * @param string $jwt le token reçu par le serveur
     * @return mixed le payload si le token est valide, faux dans LES cas contraires.
     */
    public function verifyToken($jwt) {
        try {
            return JWT::decode($jwt, $this->passport, array('HS256'));
        } catch (Exception $ex) {
            return false;
        }
    }

    /**
     * La methode est invoquée dans la methode du controlleur où 
     * l'on veut effectuer la verification.
     * La methode est utilisées lorsque le token transite via les cookies
     * 
     * @return mixed le payload si le token est valide, faux dans LES cas contraires. 
     */
    public function acceptConnexion() {
        $tkn = (isset($_COOKIE['tkn'])) ? $_COOKIE['tkn'] : null;
        return $this->verifyToken($tkn);
    }

    /**
     * Désactive le cookie du coté serveur
     * @return boolean true si la modification a fonctionnée, false dans le cas contraire
     */
    public function deactivate() {
        return setcookie("tkn", null, time());
    }

}
