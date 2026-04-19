<?php echo basename(__FILE__) . "<br>"; ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>


    <main>
      <section class="about_section">
        <h2 class="sec_msg">ここを修正します</h2>
        <h2 class="sec_title">会社概要</h2>
        <table class="company_info">

          <tr>
            <th>会社名</th>
            <td><?php the_field('company_name'); ?></td>
          </tr>
          <tr>
            <th>設立</th>
            <td>2024年</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>福岡市中央区舞鶴</td>
          </tr>
          <tr>
            <th>代表者</th>
            <td>田中太郎</td>
          </tr>
          <tr>
            <th>事業内容</th>
            <td><?php the_field('business'); ?></td>
          </tr>

          <?php if (have_rows('company_info')) : ?>
            <?php while (have_rows('company_info')) : the_row(); ?>
              <tr>
                <th><?php the_sub_field('items'); ?></th>
                <td><?php the_sub_field('contents'); ?></td>
              </tr>
            <?php endwhile; ?>
          <?php endif; ?>

        </table>


        <?php if (have_rows('partner')) : ?>
          <?php while (have_rows('partner')) : the_row(); ?>
            <div class="partner">
              <img src="<?php the_sub_field('logo'); ?>" alt="">
              <p><?php the_sub_field('company_name'); ?></p>
              <a href="<?php the_sub_field('site_url'); ?>">サイトを見る</a>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </section>


    </main>

  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>