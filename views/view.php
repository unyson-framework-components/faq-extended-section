<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>
<div class="faq-block full-width-section">
    <div class="container">
        <ul class="tab-links-list faq-tabs-list">
            <?php foreach ( $atts['faq_block'] as $block ) {?>
                <li class="list-item">
                    <a href="#"><?php echo $block['tab_text'] ?></a>
                </li>
            <?php } ?>
        </ul>

        <ul class="tab-content-list">
            <?php foreach ( $atts['faq_block'] as $block ) { ?>
                <li class="tab-content" >
                    <ul class="faq-list">
                        <?php foreach ( $block['faq'] as $faq ) { ?>
                            <li class="faq-item">
                                <h4 class="question">
                                    <?php echo $faq['question']; ?>
                                    <i class="fa fa-plus-square"></i>
                                    <i class="fa fa-minus-square"></i>
                                </h4>

                                <div class="answer">
                                    <?php echo $faq['answer']; ?>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>