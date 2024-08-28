<?php

// Dependency Inversion Principle (DIP)

// class Authenticate__ {
//     function authenticate($username, $password, $external = false,$externalService = false){
//         if($external){
//             if('google' == $externalService){
//                 // $g = new GoogleService;
//             }elseif('twitter' == $externalService){
//                 // $t = new TwitterService;
//             }elseif('github' == $externalService){
//                 // $git = new GithubService;
//             }
//         }

//     }
// }

interface AuthServiceProvider {
    function authenticate();
}
class Authenticator {
    function auth(AuthServiceProvider $auth){
        $auth->authenticate();
    }
}

class GoogleAuth implements AuthServiceProvider {
    function authenticate(){
        echo "Google Auth\n";
    }
}
class GithubAuth implements AuthServiceProvider {
    function authenticate(){
        echo "Github Auth\n";
    }
}
class TwitterAuth implements AuthServiceProvider {
    function authenticate(){
        echo "Twitter Auth\n";
    }
}
class LocalAuth implements AuthServiceProvider {
    function authenticate(){
        echo "Local Auth";
    }
}

$ga = new GoogleAuth();
$gh = new GithubAuth();
$ta = new TwitterAuth();
$la = new LocalAuth();

$at = new Authenticator();
$at->auth($ga);
$at->auth($gh);
$at->auth($ta);
$at->auth($la);

