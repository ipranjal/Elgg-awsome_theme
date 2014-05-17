/**
 * CSS for IE7
 */

/* trigger hasLayout in IE */
* {
	zoom: 1;
}

/* site menu drop-down z-index fix for IE7 */
.elgg-page-header {
    z-index: 1;
}

/* inline-block fixes */
.elgg-gallery > li,
.elgg-button,
.elgg-icon,
.elgg-menu-hz > li,
.elgg-menu-hz > li:after,
.elgg-menu-hz > li > a,
.elgg-menu-hz > li > span,
.elgg-breadcrumbs > li,
.elgg-menu-footer > li > a,
.elgg-menu-footer li,
.elgg-menu-general > li > a,
.elgg-menu-general li {
	display: inline;
}

/* IE7 does not support :after */
.elgg-breadcrumbs > li > a {
	display: inline;
	padding-right: 4px;
	margin-right: 4px;
	border-right: 1px solid #bababa;
}
.elgg-menu-footer li,
.elgg-menu-user li,
.elgg-menu-general li {
	padding-left: 4px;
	padding-right: 4px;
}
/* longtext menu would not display horizontally without this */
.elgg-menu-longtext {
	width: 100%;
}
.elgg-menu-longtext li {
	width: 100px;
	float: right;
}
.elgg-avatar {
	display: inline;
}
.elgg-body-walledgarden .elgg-col-1of2 {
	width: 255px;
}
.elgg-module-walledgarden > .elgg-head,
.elgg-module-walledgarden > .elgg-foot {
	width: 530px;
}
input, textarea {
	width: 98%;
}
.elgg-tag a {
	/* IE7 had a weird wrapping issue for tags */
	word-wrap: normal;
}
/* basic light css */
#groups-tools > .odd {
	margin: 0 10px;
}
.elgg-menu-site-more {
    top: 20px;
}
.elgg-menu-hover a:hover {
	width: 145px;
}
.elgg-search input[type=text] {
    margin-top: 0;
	width: 200px;
    height: auto;
}
.elgg-heading-site, .elgg-heading-site:hover {
	line-height: 1;
    margin-top: -8px;
}
.elgg-pagination {
	display: block;
}
.elgg-pagination li {
    display: inline;
}
.elgg-pagination a, .elgg-pagination span {
    display: inline;
}
.elgg-pagination .elgg-state-selected span {
    background: #222;
}
.elgg-page-topbar .elgg-search {
	padding-top: 5px;
}