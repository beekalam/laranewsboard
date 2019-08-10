<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">@lang("main_navigation"); ?></li>
    <li>
        <a href="admin/">
            <i class="fa fa-home"></i>
            <span>@lang("home"); ?></span>
        </a>
    </li>
    <?php if (check_user_permission('navigation')): ?>
    <li>
        <a href="admin/navigation">
            <i class="fa fa-th"></i>
            <span>@lang("navigation"); ?></span>
        </a>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('pages')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-leaf"></i> <span>@lang("pages"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="admin/add-page">@lang("add_page"); ?></a>
            </li>
            <li>
                <a href="admin/pages">@lang("pages"); ?></a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('add_post')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-file"></i> <span>@lang("messages.add_post")</span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="/admin/posts/create">Add Article</a>
            </li>
            <li>
                <a href="/admin/ordered-list">@lang("messages.add_ordered_list")</a>
            </li>
            <li>
                <a href="/admin/gallery">@lang("messages.add_gallery")</a>
            </li>
            <li>
                <a href="/admin/video">@lang("messages.add_video")</a>
            </li>
            <li>
                <a href="/admin/audio">@lang("messages.add_audio")</a>
            </li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-bars"></i> <span>@lang("posts"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="admin/posts">@lang("posts")</a>
            </li>
            <?php if (check_user_permission('manage_all_posts')): ?>
            <li>
                <a href="admin/slider-posts">@lang("slider_posts"); ?></a>
            </li>
            <li>
                <a href="admin/featured-posts">@lang("featured_posts"); ?></a>
            </li>
            <li>
                <a href="admin/breaking-news">@lang("breaking_news"); ?></a>
            </li>
            <li>
                <a href="admin/recommended-posts">@lang("recommended_posts"); ?></a>
            </li>
            <?php endif; ?>
            <li>
                <a href="admin/pending-posts">@lang("pending_posts"); ?></a>
            </li>
        </ul>
    </li>
    <li>
        <a href="admin/scheduled-posts">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <span>@lang("scheduled_posts"); ?></span>
        </a>
    </li>

    <li>
        <a href="admin/drafts">
            <i class="fa fa-file-text-o" aria-hidden="true"></i> <span>@lang("drafts"); ?></span>
        </a>
    </li>
    <?php endif; ?>

    <?php if (check_user_permission('rss_feeds')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-rss"></i> <span>@lang("rss_feeds"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="admin/import-feed">@lang("import_rss_feed"); ?></a>
            </li>
            <li>
                <a href="admin/feeds">@lang("rss_feeds"); ?></a>
            </li>

        </ul>
    </li>
    <?php endif; ?>

    <?php if (check_user_permission('categories')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-folder-open"></i> <span>@lang("categories"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="/admin/categories">Category</a>
            </li>
            <li>
                <a href="/admin/subcategories">@lang("subcategories"); ?></a>
            </li>
        </ul>
    </li>
    <?php endif; ?>

    <?php if (check_user_permission('widgets')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-th"></i> <span>@lang("widgets"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="admin/add-widget">@lang("add_widget"); ?></a>
            </li>
            <li>
                <a href="admin/widgets">@lang("widgets"); ?></a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('polls')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-list"></i> <span>@lang("polls"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="admin/add-poll">@lang("add_poll"); ?></a>
            </li>
            <li>
                <a href="admin/polls">@lang("polls"); ?></a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('gallery')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-image"></i> <span>@lang("gallery"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="admin/gallery">@lang("images"); ?></a>
            </li>
            <li>
                <a href="admin/gallery-albums">@lang("albums"); ?></a>
            </li>
            <li>
                <a href="admin/gallery-categories">@lang("categories"); ?></a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('comments_contact')): ?>
    <li>
        <a href="admin/contact-messages">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>
            <span>@lang("contact_messages"); ?></span>
        </a>
    </li>
    <li>
        <a href="admin/comments">
            <i class="fa fa-comments"></i>
            <span>@lang("comments"); ?></span>
        </a>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('newsletter')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-envelope"></i> <span>@lang("newsletter"); ?></span><span
                    class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="admin/send-email-subscribers">@lang("send_email_subscribers"); ?></a>
            </li>
            <li>
                <a href="admin/subscribers">@lang("subscribers"); ?></a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('ad_spaces')): ?>
    <li>
        <a href="admin/ad-spaces">
            <i class="fa fa-dollar" aria-hidden="true"></i>
            <span>@lang("ad_spaces"); ?></span>
        </a>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('users')): ?>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-users"></i>
            <span>@lang("users"); ?></span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <?php if (is_admin()): ?>
            <li><a href="admin/add-user"> @lang("add_user"); ?></a></li>
            <li>
                <a href="admin/administrators"> @lang("administrators"); ?></a>
            </li>
            <?php endif; ?>
            <li><a href="admin/users"> @lang("users"); ?></a></li>
        </ul>
    </li>
    <?php endif; ?>
    <?php if (is_admin()): ?>
    <li>
        <a href="admin/roles-permissions">
            <i class="fa fa-key" aria-hidden="true"></i>
            <span>@lang("roles_permissions"); ?></span>
        </a>
    </li>
    <li>
        <a href="admin/font-options"><i class="fa fa-font" aria-hidden="true"></i>
            <span>@lang("font_options"); ?></span>
        </a>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('seo_tools')): ?>
    <li>
        <a href="admin/seo-tools"><i class="fa fa-wrench"></i>
            <span>@lang("seo_tools"); ?></span>
        </a>
    </li>
    <?php endif; ?>
    <?php if (is_admin()): ?>
    <li>
        <a href="admin/social-login-configuration"><i class="fa fa-share-alt"></i>
            <span>@lang("social_login_configuration"); ?></span>
        </a>
    </li>

    <li>
        <a href="admin/cache-system">
            <i class="fa fa-database"></i>
            <span>@lang("cache_system"); ?></span>
        </a>
    </li>
    <?php endif; ?>
    <?php if (check_user_permission('settings')): ?>
    <li>
        <a href="admin/preferences">
            <i class="fa fa-check-square-o"></i>
            <span>@lang("preferences"); ?></span>
        </a>
    </li>
    <li>
        <a href="admin/language-settings">
            <i class="fa fa-language"></i>
            <span>@lang("language_settings"); ?></span>
        </a>
    </li>
    <li>
        <a href="admin/visual-settings">
            <i class="fa fa-paint-brush"></i>
            <span>@lang("visual_settings"); ?></span>
        </a>
    </li>
    <li>
        <a href="admin/email-settings">
            <i class="fa fa-cog"></i>
            <span>@lang("email_settings"); ?></span>
        </a>
    </li>
    <li>
        <a href="admin/settings">
            <i class="fa fa-cogs"></i>
            <span>@lang("settings"); ?></span>
        </a>
    </li>
    <?php endif; ?>
</ul>
