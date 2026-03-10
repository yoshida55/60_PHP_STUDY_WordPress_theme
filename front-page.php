

<?php get_header(); ?>

<!-- ここに本文を記載 -->
<div class="main_visual">``
    <!-- <img src="img/fv.jpg" alt=""> -->
    <img class = "main_visual_img" src="<?php echo get_theme_file_uri('/img/fv.jpg'); ?>" alt="" >
</div>

<section>
    <h2>練習</h2>
    <?php


        

        
        // $staff_obj2 = new class {
        //     public $name = 'bob';
        //     public $age = 25;
        //     public $position = '課長';
        // };


        // echo $staff_obj2->name;
        // echo $staff_obj2->age;

        // $test_arr = array(
        //     'name' => 'bob',
        //     'age' => 25,
        //     'position' => '課長'
        // );

        // foreach($test_arr as $key => $value){
        //     echo $key . ':' . $value . '<br>';
        // }

        $test_arr = array
            (
                'name' => 'bob',
                'age' => 25,
                'position' => '課長'
            );
            
            foreach ($test_arr as $key => $value)
            {
                echo $value . '<br>';
            };





    ?>


</section>

<section class="news_section">
    <h2 class="sec_title">お知らせ</h2>
    <a href="" class="news_item">``
        <img src="<?php echo get_theme_file_uri('/img/news.jpg'); ?>" alt="" class="news_img">
        <div class="news_info">
            <div class="news_meta">
                <time class="news_date">2023.10.01</time>
                <p class="author">田中太郎</p>
            </div>
            <h3 class="news_title">お知らせタイトルが入ります。</h3>
            <ul class="news_category">
                <li>お知らせ</li>
            </ul>
        </div>
    </a>
</section>

<section class="works_section">
    <h2 class="sec_title">施工実績</h2>
    <div class="works_container">
        <!-- ここから記事 -->
        <a href="" class="works_item">
            <img src="img/news.jpg" alt="" class="works_img">
            <div class="works_info">
                <ul class="works_category">
                    <li>WEB制作</li>
                </ul>
                <h3 class="works_title">施工実績タイトルが入ります</h3>
            </div>
        </a>
        <!-- ここまで記事 -->
    </div>
</section>
<!-- ここまで本文を記載 -->

<?php get_footer(); ?>