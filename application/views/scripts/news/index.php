<?php foreach($news as $new) { ?>
    <div class="information-item">
        <div class="information-image">
            <?php $image = ORM::factory('images')->where('id_page', '=', $new->id_new)->where('part', '=', 'news')->find(); ?>

            <?php if (file_exists('./uploads/images/' . $image->path)) { ?>
                <?php $sizes = ImageWork::getImageSize('./uploads/images/' . $image->path, '200', '200', '200', '200'); ?>
                <?php if ($image->path != '') { ?>
                    <div class="category-image-wrapper-information">
                        <img src='/uploads/images/<?php echo $image->path; ?>' width='<?php echo $sizes['newwidth']; ?>'
                             height='<?php echo $sizes['newheight']; ?>'/>
                          <!--   style="margin-top:<?php echo (202 - $sizes['newheight']) / 2; ?>px;margin-top:<?php echo (202 - $sizes['newheight']) / 2; ?>px;"-->
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="news-text">
            <div class="information-title">
                <h4><a href="/news/<?php echo strtolower(transliterate($new->title)); ?>"><?php echo $new->title; ?></a></h4>
            </div>
            <div class="information-pretext">
                <?php echo FrontHelper::maxsite_str_word($new->content, 50); ?>
            </div>
            <div class="more">
                <a href="/news/<?php echo strtolower(transliterate($new->title)); ?>">Подробнее...</a>
            </div>
            <br>

        </div>
    </div>
<?php } ?>
<?php
function transliterate($string) {
    $roman = array("Sch", "sch", 'Yo', 'Zh', 'Kh', 'Ts', 'Ch', 'Sh', 'Yu', 'ya', 'yo', 'zh', 'kh', 'ts', 'ch', 'sh', 'yu', 'ya', 'A', 'B', 'V', 'G', 'D', 'E', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', '', 'Y', '', 'E', 'a', 'b', 'v', 'g', 'd', 'e', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', '', 'y', '', 'e', '_');
    $cyrillic = array("Щ", "щ", 'Ё', 'Ж', 'Х', 'Ц', 'Ч', 'Ш', 'Ю', 'я', 'ё', 'ж', 'х', 'ц', 'ч', 'ш', 'ю', 'я', 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Ь', 'Ы', 'Ъ', 'Э', 'а', 'б', 'в', 'г', 'д', 'е', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'ь', 'ы', 'ъ', 'э', ' ');
    return str_replace($cyrillic, $roman, $string);
}

?>