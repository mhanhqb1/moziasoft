<?php
$products = array(
    array(
        'id' => 1,
        'name' => 'Logo Design',
        'description' => 'Wow... unbelievable turn-around time and quality. Thanks so much :)',
        'image' => 'https://fiverr-res.cloudinary.com/q_auto,f_auto,w_250,dpr_1.0/general_assets/logged_out_homepage/assets/sub_category/logodesign@2x.jpg',
        'rate' => 3,
        'author_image' => 'https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/attachments/profile/photo/0421434445c0962230c663a799399167-1539890888356/3a42d785-8609-429d-9730-66f90ee6e2af.png',
        'author_name' => 'Branding Studio'
    ),
    array(
        'id' => 2,
        'name' => 'Mobile Design',
        'description' => 'Excellent work by Heather! Extremely professional!',
        'image' => 'https://fiverr-res.cloudinary.com/q_auto,f_auto,w_320,dpr_1.0/general_assets/logged_out_homepage/assets/made_on_fiverr/digitalgeria.jpg',
        'rate' => 3,
        'author_image' => 'https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/attachments/profile/photo/9013af6701d865103a454fd3f7fdfb5f-1522147937684/2b41c6aa-8b43-43a3-8e6d-1407a7c76634.png',
        'author_name' => 'Branding Studio'
    ),
    array(
        'id' => 3,
        'name' => '3D Models Design',
        'description' => 'yust an outstanding and amazing work. Will continue to work with heather.',
        'image' => 'https://fiverr-res.cloudinary.com/q_auto,f_auto,w_320,dpr_1.0/general_assets/logged_out_homepage/assets/made_on_fiverr/artsi3d.png',
        'rate' => 3,
        'author_image' => 'https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/attachments/profile/photo/615696292e841f1d17f69d8026902992-1538053565697/d860db26-6c09-4bb4-bad6-05ba3736ce53.png',
        'author_name' => 'Branding Studio'
    ),
    array(
        'id' => 4,
        'name' => 'Logo Design',
        'description' => 'Thanks Heather. Not what I imagined but maybe better.',
        'image' => 'https://fiverr-res.cloudinary.com/q_auto,f_auto,w_320,dpr_1.0/general_assets/logged_out_homepage/assets/made_on_fiverr/evelinaro.png',
        'rate' => 3,
        'author_image' => 'https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/attachments/profile/photo/b549db64e1522b46dd35cf18249f4e5d-1513023270988/997e9190-6c3d-46ce-a2a7-51c145755244.jpg',
        'author_name' => 'Branding Studio'
    ),
    array(
        'id' => 5,
        'name' => 'Packaging Design',
        'description' => 'It was an absolute pleasure.',
        'image' => 'https://fiverr-res.cloudinary.com/q_auto,f_auto,w_320,dpr_1.0/general_assets/logged_out_homepage/assets/made_on_fiverr/mijalzagier.png',
        'rate' => 3,
        'author_image' => 'https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/profile/photos/8713339/original/FiverrDP.jpg',
        'author_name' => 'Branding Studio'
    )
);
?>
<div class="slider-package">
    <h2 class="section-title">Reviews</h2>
    <div class="gig-overview">
        <div class="seller-overview">
            <div class="user-profile-image">
                <label class="user-pict user-pict-32 " for="profile_image">
                    <img src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/41705c94fb3a9668b6b75a032f68019f-247948401562228669.897614/26FF1806-E3BB-4F16-AB8D-24D4ADA668A8" class="user-pict-img" alt="designerheather" data-reload="inprogress">
                </label>
                <div class="profile-name">
                    <span class="user-status">
                        <a href="#" class="seller-link" rel="nofollow,noindex">designerheather</a>
                    </span>
                </div>
            </div>
            <div class="user-info">
                <span class="user-info-rating">
                    <div class="star-rating-s15-wrapper">
                        <span class="star-rating-s15 rate-10"></span>
                    </div>
                    <span class="total-rating-out-five">5.0</span>
                    <span class="total-rating">(65)</span>
                </span>
                <span class="orders-in-queue">2 Orders in Queue</span>
            </div>
        </div>
    </div>

    <div class="slider filtering2 slick-dotted">
        <?php foreach ($products as $p): ?>
            <div>
                <div class="review">
                    <div class="review-image">
                        <img src="<?php echo $p['author_image'];?>" class="user-pict-img" alt="designerheather" data-reload="inprogress">
                    </div>
                    <div class="review-content">
                        <span class="star-rating-s15 rate-10"></span>
                        <p>
                            <?php echo $p['description'];?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    
    <div class="clear"></div>
</div>
