<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

  <main>
    <h1 class="page_title">お問い合わせ</h1>

    <div class="form_wrap">
      <form action="">

        <div class="form_group">
          <label class="form_label" for="contact_name">お名前*</label>
          <input class="form_input" type="text" name="contact_name" id="contact_name" placeholder="田中 太郎">
        </div>

        <div class="form_group">
          <label class="form_label" for="contact_name_kana">ふりがな</label>
          <input class="form_input" type="text" name="contact_name_kana" id="contact_name_kana" placeholder="田中 太郎">
        </div>

        <div class="form_group">
          <label class="form_label" for="e-mail">メールアドレス*</label>
          <input class="form_input" type="email" name="e-mail" id="e-mail" placeholder="info@exam.com">
        </div>

        <div class="form_group">
          <label class="form_label" for="category">お問い合わせ種別*</label>
          <select class="form_input" name="category" id="category">
            <option value="種別１">種別１</option>
            <option value="種別２">種別２</option>
            <option value="種別３">種別３</option>
          </select>
        </div>

        <div class="form_group">
          <label class="form_label" for="message">お問い合わせ内容*</label>
          <textarea class="form_input" name="message" id="message" cols="30" rows="10" placeholder="お問い合わせ内容を入力してください"></textarea>
        </div>

        <div class="btn_wrap">
          <input class="form_btn" type="submit" value="送信">
        </div>

      </form>
    </div>

  </main>

  <?php endwhile;?>
<?php endif;?>
<?php get_footer();?>