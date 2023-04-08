<?php
/**
 * The page contact file
 *
 * This is an exclusive WordPress theme for XIUXIU DESIGN.
 * Basically, the content is created for the purpose of displaying your works and making inquiries
 * We plan to add necessary functions as the version is upgraded.
 *
 * @package WordPress
 * @subpackage Xiuxiu_Design
 * @since xiuxiu design 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();

?>
<h2>申し込みフォーム</h2>
<div>
    <form action="" method="post" name="form" id="formCheck">
        <dl>
            <dt>お名前 ※必須</dt>
            <dd><input class="validate[required]" name="namae" type="text" value="" placeholder="例)電脳花子"></dd>
        </dl>
        <dl>
            <dt>郵便番号 ※必須</dt>
            <dd><input class="validate[required]" name="zipnumber" type="text" value="" placeholder="例)460-0002"></dd>
        </dl>
        <dl>
            <dt>都道府県 ※必須</dt>
            <dd><select class="validate[required]" name="pref">
            <option value="" selected="selected">選択してください</option>
            <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <!-- 長いので省略 -->
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
            </select></dd>
        </dl>
        <dl>
            <dt>市区町村 ※必須</dt>
            <dd><input class="validate[required]" name="address1" type="text" value="" placeholder="例)名古屋市中区丸の内"></dd>
        </dl>
        <dl>
            <dt>番地・建物名 ※必須</dt>
            <dd><input class="validate[required]" name="address2" type="text" value="" placeholder="例)2-17-30 ie桜通伏見ビルディング8F"></dd>
        </dl>
        <p><input type="submit" value="確認画面へ進む"></p>
    </form>
</div>
