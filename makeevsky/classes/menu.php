<?php 
    class menu extends ACore{
        public function get_content(){
            echo '<div id="main">';

            if($_GET['id_menu']){
                echo 'Download Error';
            }
            else {
                $id_menu = (int)$_GET['id_menu'];
                if($id_menu){
                    echo 'Wrong Adress';
                }
                else {
                    if($id_menu == 2){
                        echo '<div id = "content" <h2>
                        <a href="#" rel="bookmark" title="Фотографии">Фотографии</a>
                    </h2>
                    <p>
                        <a href="pictures/16s.jpg"><img src="pictures/16s.jpg" width="170" height="256" /></a>
                        <a href="pictures/18s.jpg"><img src="pictures/18s.jpg" width="170" height="256" /></a>
                        <a href="pictures/21s.JPG"><img src="pictures/21s.JPG" width="170" height="256" /></a>
                        <a href="pictures/22s.JPG"><img src="pictures/22s.JPG" width="170" height="256" /></a>
                        <a href="pictures/23s.JPG"><img src="pictures/23s.JPG" width="170" height="256" /></a>
                        <a href="pictures/24s.JPG"><img src="pictures/24s.JPG" width="170" height="256" /></a>
                        
                        <a href="pictures/7s.jpg"><img src="pictures/7s.jpg" width="200" height="133" /></a>
                        <a href="pictures/6s.jpg"><img src="pictures/6s.jpg" width="200" height="133" /></a>
                        <a href="pictures/2m.jpg"><img src="pictures/2m.jpg" width="134" height="94" /></a>
                        <a href="pictures/9s.JPG"><img src="pictures/9s.JPG" width="200" height="133" /></a>
                        <a href="pictures/10s.jpg"><img src="pictures/10s.jpg" width="200" height="133" /></a>
                        <a href="pictures/3m.jpg"><img src="pictures/3m.jpg" width="140" height="88" /></a>
                        <a href="pictures/11s.jpg"><img src="pictures/11s.jpg" width="200" height="133" /></a>
                        <a href="pictures/12s.JPG"><img src="pictures/12s.JPG" width="200" height="133" /></a>
                        <a href="pictures/4m.jpg"><img src="pictures/4m.jpg" width="140" height="90" /></a>
                        <a href="pictures/13s.JPG"><img src="pictures/13s.JPG" width="200" height="133" /></a>
                        <a href="pictures/20s.JPG"><img src="pictures/20s.JPG" width="200" height="133" /></a>
                        <a href="pictures/1m.jpg"><img src="pictures/1m.jpg" width="94" height="103" /></a>
                        <a href="pictures/25s.JPG"><img src="pictures/25s.JPG" width="200" height="133" /></a>
                        <a href="pictures/26s.JPG"><img src="pictures/26s.JPG" width="200" height="133" /></a>
                        <a href="pictures/27s.JPG"><img src="pictures/27s.JPG" width="200" height="133" /></a>
                        <a href="pictures/17s.jpg"><img src="pictures/17s.jpg" width="200" height="133" /></a>
                        <a href="pictures/4s.jpg"><img src="pictures/4s.jpg" width="200" height="133" /></a>
                        <a href="pictures/5s.jpg"><img src="pictures/5s.jpg" width="200" height="133" /></a>
                        <a href="pictures/3s.jpg"><img src="pictures/3s.jpg" width="200" height="133" /></a>
                        <br />
                        <h2><span class="seo">А так же вы можите скачать аудио-записи</span></h2>
                        <a href="pictures/iz_v_mire_zivotnih.mid"><img class="nobord" src="pictures/a1.jpg" width="28" height="38" /> В мире животных (mp3)</a><br />
                        <h2><span class="seo">... и видео-записи</span></h2>
                        <a href="pictures/LenZoo_Butterfly.wmv" title="Выставка бабочек"><img class="nobord" src="pictures/v1.jpg" width="155" height="120" /></a>
                        <a href="pictures/zoo_prezent.avi" title="презентация зоопарка"><img class="nobord" src="pictures/v2.jpg" width="155" height="120" /></a>
                    </p>
                </div>';
                    }
                    else if($id_menu == 3){
                        printf('<div id = "content"<div id="content">
                                    <h2>
                                        <a href="#" rel="bookmark" title="Фотографии">Как к нам добраться</a>
                                        <span class="seo">Адрес</span>
                                    </h2>
                                    Адрес зоопарка: <br />
                                Россия, 614000, г. Пермь, ул. Орджоникидзе, 10. <br /><br />
                                
                                Проезд: <br />
                                троллейбусом № 1, маршрутным такси № 3 до остановки "Художественная галерея";<br />
                                троллейбусами № 5,7, автобусом №7 до ост. "Советская";<br />
                                трамваями № 3,4,7,12,13, автобусами № 13,53 до ост. "ЦУМ"<br /><br />
                                
                                Зоопарк работает круглый год без выходных дней:<br />
                                с 9 до 20 часов - с 1 апреля по 30 сентября,<br />
                                с 10 до 18 часов - с 1 октября по 31 марта,<br />
                                кассы закрываются на 1 час раньше.<br /><br />
                                
                                                <h2><span class="seo">Наши расценки</span></h2>
                                Цена взрослого билета (от 12 лет) - 80 руб., детского (от 4 до 12 лет) - 40 руб. <br /><br />
                                
                                Платные услуги: <br />
                                Катание на животных, экскурсии и лекции. <br />
                                Катание верхом на лошади или пони - 40 рублей, <br />
                                Катание на пони в тележке - 30 рублей.<br />
                                Акватеррариум - взрослый билет 70 рублей, детский билет стоит 30 рублей. <br />
                                Адрес Акватеррариума: Комсомольский проспект, 2. Вход отдельно от зоопарка. <br /><br /><br />
                                
                                
                                Экскурсии по зоопарку заказываются по телефону <b>2-181-456</b>. Минимальная группа экскурсантов – 10 человек. Экскурсионные билеты (вместо входных) стоят 90 и 50 рублей для взрослых и детей соответственно. На 15 детей один сопровождающий – бесплатно.<br /><br />
                                
                                Экскурсии проводятся обзорные и тематические, в традиционной, костюмированной и игровой формах и рассчитаны на любой возраст экскурсантов.<br /><br />
                                
                                На территории зоопарка есть детский уголок с качелями, каруселями, лесенками, работает буфет; в летнее время работают киоски по продаже мороженого, выпечки, прохладительных напитков, сладостей, а так же продаются воздушные шары, детские игрушки, печатная продукция, работает беспроигрышная лотерея. <br /><br />
                                
                                В летнее время на территории зоопарка ежедневно функционирует детская игровая площадка и контактный зоопарк «Детский дворик» (бесплатно). В контактном зоопарке дети могут тесно пообщаться с ягнятами, кроликами, курами разных пород.<br /><br />
                                <b>E-mail: zoo@perm.raid.ru</b><br /><br />
                                                <h2><span class="seo">Карта зоопарка</span></h2>
                                <p>
                                    <a href="pictures/karta.gif">
                                        <img src="pictures/karta.gif" width="376" height="413" />
                                    </a>
                                </p>
                         </div>');
                    }
                }
            }
        }
    }
?>