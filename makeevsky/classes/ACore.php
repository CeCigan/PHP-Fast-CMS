<?php 
    require_once('config.php');
    abstract class ACore {

        protected $db;
    
        public function __construct() {
            $this->db = mysqli_connect(HOST,USER,PASSWORD,DB);
            if(!$this->db){
                exit("Ошибка соединения с базой данных".mysqli_connect_error());
            }
            if(!mysqli_select_db($this->db,DB)){
                exit("Нет такой базы данных".mysqli_connect_error());
            }
            mysqli_query($this->db,"SET NAMES 'UTF8'");
        }
    
        protected function get_header() {
            include "header.php";
        }

        protected function menu_array(){
            $query = "SELECT id_page ,name_page FROM pages";
    
            $result = mysqli_query($this->db,$query);
            if(!$result){
                exit(mysqli_connect_error() . " Connect Error");
            };
    
            $row = array();
            for($i=0;$i<mysqli_num_rows($result); $i++){
                $row[] = mysqli_fetch_array($result,MYSQLI_ASSOC);
            }
            return $row;
        }
    
        protected function get_menu(){
            $row = $this->menu_array();
            echo '<div id="sidemenu">
                        <ul>';
    
            echo '<li class = "current_page_item"><a href = "?option=main">Главная</a></a></li>';
            $i = 1;
            foreach($row as $item){
                printf("<li class = 'current_page_item'><a href='?option=menu&id_page=%s'>%s</a></li>", $item['id_page'], $item['name_page']);
                $i++;
            }
            echo "</ul></div></div>";
        }
    
        protected function get_footer(){
            $row = $this->menu_array();
            echo '<div class="clear"></div>
			        <div id="browse">
				        <h2 class="subhead">&nbsp;</h2>
                    </div>
                </div>
            </div>';
            /*echo '<div class="toplinks" style="padding-left:127px;">
            <a href="?option=main">Главная</a></div>
            <div class="sap2">::</div>';
            $i=1;
            foreach($row as $item){
                printf("<div class='toplinks'><a href='?option=menu&id_menu=%s'>%s</a></div>
                ",$item['id_menu'],$item['name_menu']);
    
                if($i != count($row)){
                    echo "<div class='sap2'>::</div>";
                }
                $i++;
            }
            echo '</div>
            <div class="copy"><span class="style1">Copyright 2010 Название сайта </span>
            </div>
            </div>
            </center></body></html>';*/
        }
        public function get_body() {
            $this->get_header();
            $this->get_menu();
            $this->get_content();
            $this->get_footer();
        }
    
        abstract function get_content();
    }
?>