<?php

use Contao\ContentCode;
use Contao\ContentHeadline;
use Contao\ContentHtml;
use Contao\ContentList;
use Contao\ContentText;
use Contao\ContentTable;
use Contao\ContentHyperlink;
use Contao\ContentToplink;
use Contao\ContentImage;
use Contao\ContentGallery;
use Contao\ContentPlayer;
use Contao\ContentYouTube;
use Contao\ContentVimeo;
use Contao\ContentDownloads;
use Contao\ContentDownload;
use Contao\ContentTeaser;

$GLOBALS['TL_CTE']['texts']['code'] = ContentCode::class;
$GLOBALS['TL_CTE']['texts']['headline'] = ContentHeadline::class;
$GLOBALS['TL_CTE']['texts']['html'] = \ContentHtml::class;
$GLOBALS['TL_CTE']['texts']['list'] = ContentList::class;
$GLOBALS['TL_CTE']['texts']['text'] = ContentText::class;
$GLOBALS['TL_CTE']['texts']['table'] = ContentTable::class;
$GLOBALS['TL_CTE']['links']['hyperlink'] = ContentHyperlink::class;
$GLOBALS['TL_CTE']['links']['toplink'] = ContentToplink::class;
$GLOBALS['TL_CTE']['media']['image'] = ContentImage::class;
$GLOBALS['TL_CTE']['media']['gallery'] = ContentGallery::class;
$GLOBALS['TL_CTE']['media']['player'] = ContentPlayer::class;
$GLOBALS['TL_CTE']['media']['youtube'] = ContentYouTube::class;
$GLOBALS['TL_CTE']['media']['vimeo'] = ContentVimeo::class;
$GLOBALS['TL_CTE']['files']['downloads'] = ContentDownloads::class;
$GLOBALS['TL_CTE']['files']['download'] = ContentDownload::class;
$GLOBALS['TL_CTE']['includes']['teaser'] = ContentTeaser::class;