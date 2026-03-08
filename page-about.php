<?php get_header(); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <main>
      <section class="about_section">
        <h2 class="sec_title">会社概要</h2>
        <table class="company_info">

          <tr>
            <th>会社名</th>
            <td>株式会社Test</td>
          </tr>
          <tr>
            <th>設立</th>
            <td>2000年4月</td>
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
            <td>WEB制作</td>
          </tr>
        </table>
      </section>

    </main>

  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>