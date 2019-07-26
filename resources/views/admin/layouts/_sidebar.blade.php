<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header"><?php echo trans("main_navigation"); ?></li>
    <li>
        <a href="<?php echo admin_url(); ?>">
            <i class="fa fa-home"></i>
            <span><?php echo trans("home"); ?></span>
        </a>
    </li>
    <?php if (check_user_permission('navigation')): ?>
    <li>
        <a href="<?php echo admin_url(); ?>navigation">
            <i class="fa fa-th"></i>
            <span><?php echo trans("navigation"); ?></span>
        </a>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('pages')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-leaf"></i> <span><?php echo trans("pages"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo admin_url(); ?>add-page"><?php echo trans("add_page"); ?></a>
            </li>
            <li>
                <a href="<?php echo admin_url(); ?>pages"><?php echo trans("pages"); ?></a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('add_post')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-file"></i> <span><?php echo trans("add_post"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo admin_url(); ?>add-post"><?php echo trans("add_article"); ?></a>
            </li>
            <li>
                <a href="<?php echo admin_url(); ?>add-ordered-list"><?php echo trans("add_ordered_list"); ?></a>
            </li>
            <li>
                <a href="<?php echo admin_url(); ?>add-gallery"><?php echo trans("add_gallery"); ?></a>
            </li>
            <li>
                <a href="<?php echo admin_url(); ?>add-video"><?php echo trans("add_video"); ?></a>
            </li>
            <li>
                <a href="<?php echo admin_url(); ?>add-audio"><?php echo trans("add_audio"); ?></a>
            </li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-bars"></i> <span><?php echo trans("posts"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo admin_url(); ?>posts"><?php echo trans("posts"); ?></a>
            </li>
            <?php if (check_user_permission('manage_all_posts')): ?>
            <li>
                <a href="<?php echo admin_url(); ?>slider-posts"><?php echo trans("slider_posts"); ?></a>
            </li>
            <li>
                <a href="<?php echo admin_url(); ?>featured-posts"><?php echo trans("featured_posts"); ?></a>
            </li>
            <li>
                <a href="<?php echo admin_url(); ?>breaking-news"><?php echo trans("breaking_news"); ?></a>
            </li>
            <li>
                <a href="<?php echo admin_url(); ?>recommended-posts"><?php echo trans("recommended_posts"); ?></a>
            </li>
            <?php endif; ?>
            <li>
                <a href="<?php echo admin_url(); ?>pending-posts"><?php echo trans("pending_posts"); ?></a>
            </li>
        </ul>
    </li>
    <li>
        <a href="<?php echo admin_url(); ?>scheduled-posts">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <span><?php echo trans("scheduled_posts"); ?></span>
        </a>
    </li>

    <li>
        <a href="<?php echo admin_url(); ?>drafts">
            <i class="fa fa-file-text-o" aria-hidden="true"></i> <span><?php echo trans("drafts"); ?></span>
        </a>
    </li>
    <?php endif; ?>

    <?php if (check_user_permission('rss_feeds')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-rss"></i> <span><?php echo trans("rss_feeds"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo admin_url(); ?>import-feed"><?php echo trans("import_rss_feed"); ?></a>
            </li>
            <li>
                <a href="<?php echo admin_url(); ?>feeds"><?php echo trans("rss_feeds"); ?></a>
            </li>

        </ul>
    </li>
    <?php endif; ?>

    <?php if (check_user_permission('categories')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-folder-open"></i> <span><?php echo trans("categories"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="/admin/categories">Category</a>
            </li>
            <li>
                <a href="/admin/subcategories"><?php echo trans("subcategories"); ?></a>
            </li>
        </ul>
    </li>
    <?php endif; ?>

    <?php if (check_user_permission('widgets')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-th"></i> <span><?php echo trans("widgets"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo admin_url(); ?>add-widget"><?php echo trans("add_widget"); ?></a>
            </li>
            <li>
                <a href="<?php echo admin_url(); ?>widgets"><?php echo trans("widgets"); ?></a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('polls')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-list"></i> <span><?php echo trans("polls"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo admin_url(); ?>add-poll"><?php echo trans("add_poll"); ?></a>
            </li>
            <li>
                <a href="<?php echo admin_url(); ?>polls"><?php echo trans("polls"); ?></a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('gallery')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-image"></i> <span><?php echo trans("gallery"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo admin_url(); ?>gallery"><?php echo trans("images"); ?></a>
            </li>
            <li>
                <a href="<?php echo admin_url(); ?>gallery-albums"><?php echo trans("albums"); ?></a>
            </li>
            <li>
                <a href="<?php echo admin_url(); ?>gallery-categories"><?php echo trans("categories"); ?></a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('comments_contact')): ?>
    <li>
        <a href="<?php echo admin_url(); ?>contact-messages">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>
            <span><?php echo trans("contact_messages"); ?></span>
        </a>
    </li>
    <li>
        <a href="<?php echo admin_url(); ?>comments">
            <i class="fa fa-comments"></i>
            <span><?php echo trans("comments"); ?></span>
        </a>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('newsletter')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-envelope"></i> <span><?php echo trans("newsletter"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo admin_url(); ?>send-email-subscribers"><?php echo trans("send_email_subscribers"); ?></a>
            </li>
            <li>
                <a href="<?php echo admin_url(); ?>subscribers"><?php echo trans("subscribers"); ?></a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('ad_spaces')): ?>
    <li>
        <a href="<?php echo admin_url(); ?>ad-spaces">
            <i class="fa fa-dollar" aria-hidden="true"></i>
            <span><?php echo trans("ad_spaces"); ?></span>
        </a>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('users')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-users"></i>
            <span><?php echo trans("users"); ?></span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <?php if (is_admin()): ?>
            <li><a href="<?php echo admin_url(); ?>add-user"> <?php echo trans("add_user"); ?></a></li>
            <li>
                <a href="<?php echo admin_url(); ?>administrators"> <?php echo trans("administrators"); ?></a>
            </li>
            <?php endif; ?>
            <li><a href="<?php echo admin_url(); ?>users"> <?php echo trans("users"); ?></a></li>
        </ul>
    </li>
    <?php endif; ?>
    <?php if (is_admin()): ?>
    <li>
        <a href="<?php echo admin_url(); ?>roles-permissions">
            <i class="fa fa-key" aria-hidden="true"></i>
            <span><?php echo trans("roles_permissions"); ?></span>
        </a>
    </li>
    <li>
        <a href="<?php echo admin_url(); ?>font-options"><i class="fa fa-font" aria-hidden="true"></i>
            <span><?php echo trans("font_options"); ?></span>
        </a>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('seo_tools')): ?>
    <li>
        <a href="<?php echo admin_url(); ?>seo-tools"><i class="fa fa-wrench"></i>
            <span><?php echo trans("seo_tools"); ?></span>
        </a>
    </li>
    <?php endif; ?>
    <?php if (is_admin()): ?>
    <li>
        <a href="<?php echo admin_url(); ?>social-login-configuration"><i class="fa fa-share-alt"></i>
            <span><?php echo trans("social_login_configuration"); ?></span>
        </a>
    </li>

    <li>
        <a href="<?php echo admin_url(); ?>cache-system">
            <i class="fa fa-database"></i>
            <span><?php echo trans("cache_system"); ?></span>
        </a>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('settings')): ?>
    <li>
        <a href="<?php echo admin_url(); ?>preferences">
            <i class="fa fa-check-square-o"></i>
            <span><?php echo trans("preferences"); ?></span>
        </a>
    </li>
    <li>
        <a href="<?php echo admin_url(); ?>language-settings">
            <i class="fa fa-language"></i>
            <span><?php echo trans("language_settings"); ?></span>
        </a>
    </li>
    <li>
        <a href="<?php echo admin_url(); ?>visual-settings">
            <i class="fa fa-paint-brush"></i>
            <span><?php echo trans("visual_settings"); ?></span>
        </a>
    </li>
    <li>
        <a href="<?php echo admin_url(); ?>email-settings">
            <i class="fa fa-cog"></i>
            <span><?php echo trans("email_settings"); ?></span>
        </a>
    </li>
    <li>
        <a href="<?php echo admin_url(); ?>settings">
            <i class="fa fa-cogs"></i>
            <span><?php echo trans("settings"); ?></span>
        </a>
    </li>
    <?php endif; ?>
</ul>
