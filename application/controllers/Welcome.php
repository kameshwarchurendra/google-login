<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Welcome extends CI_Controller {
//=========================Welcome============================//
public function index(){
      include_once APPPATH . "libraries/New_Google/vendor/autoload.php";
      $dt['pagename']="Google Login ";
      // Creating new google client instance
      $google_client = new Google_Client();

      $google_client->setClientId('501667225494-jv13qa5q5q5ulq4709m6id2a8sagoc88.apps.googleusercontent.com'); //Define your ClientID 
    
      $google_client->setClientSecret('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'); //Define your Client Secret Key 
    
      $google_client->setRedirectUri('https://humfans.com/newtest/googlesigin/welcome/index'); //Define your Redirect Uri
    
      $google_client->addScope('email');
    
      $google_client->addScope('profile');
      $google_client->setAccessType("offline");
      
      
                   //echo"<pre>";print_r($_GET['code']);

      if(isset($_GET['code'])){ 
             
            // Authenticate user with google 
              $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
              
                // Get user info from google 
               if(!isset($token["error"])){
                   
                    $google_client->setAccessToken($token['access_token']);
                
                    $this->session->set_userdata('access_token', $token['access_token']);
                
                    $google_service = new Google_Service_Oauth2($google_client);
                
                    $data = $google_service->userinfo->get();
                    
                    //echo"<pre>"; print_r($data['email']);
                    $dt['oauth_provider'] = 'google'; 
                    $dt['oauth_uid']      = $data['id']; 
                    $dt['first_name']     = $data['given_name']; 
                    $dt['last_name']      = $data['family_name']; 
                    $dt['email']          = $data['email']; 
                    $dt['gender']         = !empty($data['gender'])?$data['gender']:''; 
                    $dt['locale']         = !empty($data['locale'])?$data['locale']:''; 
                    $dt['picture']        = !empty($data['picture'])?$data['picture']:''; 
                    //$this->session->set_userdata('User',  $dt);
                    redirect('Welcome/Home','refresh');
                    
                     
                }
                
                 
             
                 
    
        }
  $dt['loginURL'] = $google_client->createAuthUrl();
 $this->load->view('login_form',$dt);
}


public function Home(){
           $dt['pagename']=" Google login  Dashboard";
           $dt['User']     = $this->session->userdata('User');
        //   print_r($dt['User']);die();
          $this->load->view('home',$dt);
}

	
//=========================Welcome============================//
}?>