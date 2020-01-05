<?php
$products = array(
    array(
        'id' => 1,
        'name' => 'Logo Design',
        'description' => 'I will design a professional  unique modern minimalist business logo',
        'image' => 'https://fiverr-res.cloudinary.com/q_auto,f_auto,w_250,dpr_1.0/general_assets/logged_out_homepage/assets/sub_category/logodesign@2x.jpg',
        'rate' => 3,
        'author_image' => 'https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/profile/photos/8713339/original/FiverrDP.jpg',
        'author_name' => 'Branding Studio'
    ),
    array(
        'id' => 2,
        'name' => 'Mobile Design',
        'description' => 'I will design a professional  unique modern minimalist business logo',
        'image' => 'https://fiverr-res.cloudinary.com/q_auto,f_auto,w_320,dpr_1.0/general_assets/logged_out_homepage/assets/made_on_fiverr/digitalgeria.jpg',
        'rate' => 3,
        'author_image' => 'https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/profile/photos/8713339/original/FiverrDP.jpg',
        'author_name' => 'Branding Studio'
    ),
    array(
        'id' => 3,
        'name' => '3D Models Design',
        'description' => 'I will design a professional  unique modern minimalist business logo',
        'image' => 'https://fiverr-res.cloudinary.com/q_auto,f_auto,w_320,dpr_1.0/general_assets/logged_out_homepage/assets/made_on_fiverr/artsi3d.png',
        'rate' => 3,
        'author_image' => 'https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/profile/photos/8713339/original/FiverrDP.jpg',
        'author_name' => 'Branding Studio'
    ),
    array(
        'id' => 4,
        'name' => 'Logo Design',
        'description' => 'I will design a professional  unique modern minimalist business logo',
        'image' => 'https://fiverr-res.cloudinary.com/q_auto,f_auto,w_320,dpr_1.0/general_assets/logged_out_homepage/assets/made_on_fiverr/evelinaro.png',
        'rate' => 3,
        'author_image' => 'https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/profile/photos/8713339/original/FiverrDP.jpg',
        'author_name' => 'Branding Studio'
    ),
    array(
        'id' => 5,
        'name' => 'Packaging Design',
        'description' => 'I will design a professional  unique modern minimalist business logo',
        'image' => 'https://fiverr-res.cloudinary.com/q_auto,f_auto,w_320,dpr_1.0/general_assets/logged_out_homepage/assets/made_on_fiverr/mijalzagier.png',
        'rate' => 3,
        'author_image' => 'https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/profile/photos/8713339/original/FiverrDP.jpg',
        'author_name' => 'Branding Studio'
    ),
    array(
        'id' => 6,
        'name' => 'Web Design',
        'description' => 'I will design a professional  unique modern minimalist business logo',
        'image' => 'https://fiverr-res.cloudinary.com/q_auto,f_auto,w_320,dpr_1.0/general_assets/logged_out_homepage/assets/made_on_fiverr/niccoffman.jpg',
        'rate' => 3,
        'author_image' => 'https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/profile/photos/8713339/original/FiverrDP.jpg',
        'author_name' => 'Branding Studio'
    ),
    array(
        'id' => 7,
        'name' => 'Web & Mobile Design',
        'description' => 'I will design a professional  unique modern minimalist business logo',
        'image' => 'https://fiverr-res.cloudinary.com/q_auto,f_auto,w_320,dpr_1.0/general_assets/logged_out_homepage/assets/made_on_fiverr/paudmartins.png',
        'rate' => 3,
        'author_image' => 'https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/profile/photos/8713339/original/FiverrDP.jpg',
        'author_name' => 'Branding Studio'
    ),
    array(
        'id' => 8,
        'name' => 'Brochure Design',
        'description' => 'I will design a professional  unique modern minimalist business logo',
        'image' => 'https://fiverr-res.cloudinary.com/q_auto,f_auto,w_320,dpr_1.0/general_assets/logged_out_homepage/assets/made_on_fiverr/designerheather.jpg',
        'rate' => 3,
        'author_image' => 'https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/profile/photos/8713339/original/FiverrDP.jpg',
        'author_name' => 'Branding Studio'
    )
);
?>
<div class="made-on-fiverr" style="">
    <h2>Let's get work done by popular freelancers</h2>
    <div class="slider-package">
        <div class="slider filtering slick-dotted">
            <?php foreach ($products as $p): ?>
            <div>
                <div class="project-card">
                    <div class="profilehead">
                        <a href="#" class="sellerimage" style="display:block;width: 100%;height: 56px;padding-top: 180px;background:url('<?php echo $p['image'];?>');background-repeat: no-repeat;background-size: cover;">
                            <img src="<?php echo $p['author_image'];?>" alt="seller profile image"/> <span class="puname"><?php echo $p['author_name'];?></span>
                        </a>
                    </div>
                    <div class="project-info">
                        <!--<a href="#" class="seller-image">
                          <img src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/bc8d9342a981e3e7f42c4c3e15b30e7d-1555596582200/4754a943-ba33-4953-b84a-033fd3d36350.jpg" alt="seller profile image"></a>
                        -->
                        <span class="gig-info">
                            <a href="#"><b><?php echo $p['name'];?></b></a>
                            <a href="#"><?php echo $p['description'];?></a>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate_<?php echo $p['id'];?>" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="raterate_<?php echo $p['id'];?>" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate_<?php echo $p['id'];?>" value="3" checked="checked"/>
                                <label for="star3" title="text" class="active">3 stars</label>
                                <input type="radio" id="star2" name="rate_<?php echo $p['id'];?>" value="2" />
                                <label for="star2" title="text" class="active">2 stars</label>
                                <input type="radio" id="star1" name="rate_<?php echo $p['id'];?>" value="1" />
                                <label for="star1" title="text" class="active">1 star</label>
                            </div>
                            <div style="clear:both;"></div>
                            <span style="width: auto;text-align: right;font-weight:bold;margin-top: 10px;display: block;padding-right: 20px;">Start at $5</span>
                        </span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>