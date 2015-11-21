<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<!-- start footer -->
<div id="footer">
    <div class="footer-wrap">
        <div class="footer-holder">
            <div class="threecolumns">
                <div class="column">
                    <h3>Twittroll</h3>
                    <div class="tweet-box">
                        <p><a href="#">@chitlesh</a> Go to the page for the category you want and tack /feed/ on the end of the URL. </p>
                        <span class="date">5:28 PM Nov 17th via HootSuite</span>
                    </div>
                    <div class="tweet-box">
                        <p>Happy birthday to WordPress core UI contributor <a href="#">@johnonolan</a> May the coming year bring you better tabs for the Themes screen. :) </p>
                        <span class="date">11:51 PM Nov 8th via CoTweet</span>
                    </div>
                    <div class="tweet-box">
                        <p><a href="#">@spork_ethan</a> That is not put out by WordPress.</p>
                        <span class="date">9:00 AM Nov 8th via CoTweet in reply to spork_ethan</span>
                    </div>
                </div>
                <div class="column">
                    <h3>Newsteller</h3>
                    <p>Duis vitae facilisis sapien. Sed vel porta erat. Quisque libero libero.</p>
                    <form action="#" class="subscribe-form">
                        <fieldset>
                            <span class="text-wrap"><input type="text" class="text" value="E-mail Address" /></span>
                            <input type="submit" class="submit" value="Subscribe now!" />
                        </fieldset>
                    </form>
                    <h3>Get Social</h3>
                    <ul class="social-list">
                        <li><a href="#" class="social1 fadeThis"><span class="hover">social1</span></a></li>
                        <li><a href="#" class="social2 fadeThis"><span class="hover">sosial2</span></a></li>
                        <li><a href="#" class="social3 fadeThis"><span class="hover">sosial3</span></a></li>
                        <li><a href="#" class="social4 fadeThis"><span class="hover">sosial4</span></a></li>
                        <li><a href="#" class="social5 fadeThis"><span class="hover">sosial5</span></a></li>
                        <li><a href="#" class="social6 fadeThis"><span class="hover">sosial6</span></a></li>
                        <li><a href="#" class="social7 fadeThis"><span class="hover">sosial7</span></a></li>
                        <li><a href="#" class="social8 fadeThis"><span class="hover">sosial8</span></a></li>
                    </ul>
                </div>
                <div class="column">
                    <h3>Contact Us</h3>
                    <dl class="contact-list">
                        <dt>Adress:</dt>
                        <dd>
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array(
                               "COMPONENT_TEMPLATE" => ".default",
                                  "AREA_FILE_SHOW" => "file",
                                  "AREA_FILE_SUFFIX" => "inc",
                                  "EDIT_TEMPLATE" => "",
                                  "PATH" => SITE_TEMPLATE_PATH."/include_areas/adress.php"
                               )
                            );?>
                        </dd>
                        <dt>Phone:</dt>
                        <dd>
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/phone.php"
                                )
                            );?>
                        </dd>
                        <dt>Fax:</dt>
                        <dd>
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/f-phone.php"
                                )
                            );?>
                        </dd>
                        <dt>E-mail:</dt>
                        <dd>
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/email.php"
                                )
                            );?>
                        </dd>
                    </dl>
                    <div class="map-holder">
                        <a href="#"><img class="large" src="<?=SITE_TEMPLATE_PATH;?>/_include/images/map.jpg" alt="image description" width="262" height="109" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-wrap">
        <div class="copy-holder">
            <span class="copy">Copyright &copy; Romanych <?echo (date("Y"));?>. All Rights Reserved</span>
            <a href="#" class="design">Made by Nikita Pandykly</a>
        </div>
    </div>
</div>
<!-- end footer -->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>