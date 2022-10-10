<?php
require_once("model/model.php");

class controller extends model 
{
    public function __construct()
    {
     parent::__construct();
     // store data in contact table
     if(isset($_POST["contact_btn"]))
     {
         
         $fnm=$_POST["fname"];
         $em=$_POST["email"];
         $phone=$_POST["phone"];
         $msg=$_POST["message"];
         
         $data=array("text_firstname"=>$fnm,"text_email"=>$em,"text_phone"=>$phone,"text_msg"=>$msg);
         $chk=$this->insert_data('tbl_contact',$data);
       
         if($chk)
         {
           echo "<script>
           alert('Thanks for contact with us Our one of Admin will contact with you Soon!')
           window.location='contactus';
           </script>";
         }
     } 
   
    // load your views here using controller routing
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
             {
                case '/':
                require_once("index.php"); 
                require_once("header.php");
                require_once("slider.php");
                require_once("contact_us.php");
                require_once("expert.php");
                require_once("about.php");
                require_once("pricing1.php");
                require_once("we-do.php");
                require_once("footer.php");
                // require_once("login.php");
                break; 
                
                case '/contact_us':
                    require_once("index.php");
                    require_once("header.php");
                    // require_once("navbar.php");
                    require_once("contact_us.php");
                    require_once("footer.php");
                    // require_once("login.php");
                    break;

                    case '/about_us':
                        require_once("index.php");
                        require_once("header.php");
                        // require_once("navbar.php");
                        require_once("about.php");
                        require_once("footer.php");
                        // require_once("login.php");
                        break;
                        case '/priceing':
                            require_once("index.php");
                            require_once("header.php");
                            require_once("pricing1.php");
                            require_once("footer.php");
                            // require_once("login.php");
                            break;

                            case '/we_what_do':
                                require_once("index.php");
                                require_once("header.php");
                                require_once("we-do.php");
                                require_once("footer.php");
                                // require_once("login.php");
                                break;
                default:
                require_once("index.php");
                require_once("header.php");
                require_once("404.php");
                require_once("footer.php");
                break;
            }
        }      
    }
}
$obj=new controller();
?>