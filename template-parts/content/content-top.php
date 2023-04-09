
<?php
// 取得したい内容を配列に記載します（不要箇所は省略可）
$args = array(
	'posts_per_page'   => 5, // 読み込みしたい記事数（全件取得時は-1）
	'category'         => 1, // 読み込みしたいカテゴリID（複数の場合は '1,2'）
	'orderby'          => 'ID', // 何順で記事を読み込むか（省略時は日付順）
	'order'            => 'DESC', // 昇順(ASC)か降順か(DESC）
	'exclude'          => '', // 一覧に表示したくない記事のID（複数時は,区切）
);

// 配列で指定した内容で、記事情報を取得
$datas = get_posts( $args );

// 取得した記事情報の表示
if ( $datas ): // 記事情報がある場合はforeachで記事情報を表示

// ↓ ループ開始 ↓
foreach ( $datas as $post ): // $datas as $post の $datas は取得時に設定した変数名、$postは変更不可
	setup_postdata( $post ); // アーカイブページ同様にthe_titleなどで記事情報を表示できるようにする
?>

	<pre>
    <?php print_r($datas);?>
  </pre>

<?php
endforeach; 
// ↑ ループ終了 ↑

else: // 記事情報がなかったら
?>
  <?php print 'detaがありません。'; ?>

<?php
endif;

// 一覧情報取得に利用したループをリセットする
wp_reset_postdata();
?>