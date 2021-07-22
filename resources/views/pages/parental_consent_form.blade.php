<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700&amp;display=swap" rel="stylesheet">
    <link href="Style.css" type="text/css" rel="stylesheet" />
    <title>Parental Consent | Microgravity</title>

    <!--<link href="https://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet" />-->
    <link href="style.css" rel="stylesheet" />


    <style>
        <!--
        /* Font Definitions */
        @font-face
        {font-family:Wingdings;
            panose-1:5 0 0 0 0 0 0 0 0 0;
            mso-font-charset:2;
            mso-generic-font-family:auto;
            mso-font-pitch:variable;
            mso-font-signature:0 268435456 0 0 -2147483648 0;}
        @font-face
        {font-family:Sylfaen;
            panose-1:1 10 5 2 5 3 6 3 3 3;
            mso-font-charset:0;
            mso-generic-font-family:roman;
            mso-font-pitch:variable;
            mso-font-signature:67110535 0 0 0 159 0;}
        @font-face
        {font-family:"Cambria Math";
            panose-1:2 4 5 3 5 4 6 3 2 4;
            mso-font-charset:0;
            mso-generic-font-family:roman;
            mso-font-pitch:variable;
            mso-font-signature:3 0 0 0 1 0;}
        @font-face
        {font-family:Calibri;
            panose-1:2 15 5 2 2 2 4 3 2 4;
            mso-font-charset:0;
            mso-generic-font-family:swiss;
            mso-font-pitch:variable;
            mso-font-signature:-469750017 -1073732485 9 0 511 0;}
        @font-face
        {font-family:Algerian;
            panose-1:4 2 7 5 4 10 2 6 7 2;
            mso-font-charset:0;
            mso-generic-font-family:decorative;
            mso-font-pitch:variable;
            mso-font-signature:3 0 0 0 1 0;}
        /* Style Definitions */
        p.MsoNormal, li.MsoNormal, div.MsoNormal
        {mso-style-unhide:no;
            mso-style-qformat:yes;
            mso-style-parent:"";
            margin-top:0cm;
            margin-right:0cm;
            margin-bottom:8.0pt;
            margin-left:0cm;
            line-height:106%;
            mso-pagination:widow-orphan;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;
            mso-fareast-font-family:Calibri;
            mso-bidi-font-family:"Times New Roman";
            mso-fareast-language:EN-US;}
        p.MsoCommentText, li.MsoCommentText, div.MsoCommentText
        {mso-style-noshow:yes;
            mso-style-priority:99;
            mso-style-link:"Comment Text Char";
            margin-top:0cm;
            margin-right:0cm;
            margin-bottom:8.0pt;
            margin-left:0cm;
            mso-pagination:widow-orphan;
            font-size:10.0pt;
            font-family:"Calibri",sans-serif;
            mso-fareast-font-family:Calibri;
            mso-bidi-font-family:"Times New Roman";
            mso-fareast-language:EN-US;}
        p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
        {mso-style-priority:1;
            mso-style-unhide:no;
            mso-style-qformat:yes;
            mso-style-parent:"";
            margin:0cm;
            mso-pagination:widow-orphan;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;
            mso-fareast-font-family:Calibri;
            mso-bidi-font-family:"Times New Roman";
            mso-fareast-language:EN-US;}
        p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
        {mso-style-priority:34;
            mso-style-unhide:no;
            mso-style-qformat:yes;
            mso-style-link:"List Paragraph Char";
            margin-top:0cm;
            margin-right:0cm;
            margin-bottom:8.0pt;
            margin-left:36.0pt;
            mso-add-space:auto;
            line-height:106%;
            mso-pagination:widow-orphan;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;
            mso-fareast-font-family:Calibri;
            mso-bidi-font-family:"Times New Roman";
            mso-fareast-language:EN-US;}
        p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
        {mso-style-priority:34;
            mso-style-unhide:no;
            mso-style-qformat:yes;
            mso-style-link:"List Paragraph Char";
            mso-style-type:export-only;
            margin-top:0cm;
            margin-right:0cm;
            margin-bottom:0cm;
            margin-left:36.0pt;
            mso-add-space:auto;
            line-height:106%;
            mso-pagination:widow-orphan;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;
            mso-fareast-font-family:Calibri;
            mso-bidi-font-family:"Times New Roman";
            mso-fareast-language:EN-US;}
        p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
        {mso-style-priority:34;
            mso-style-unhide:no;
            mso-style-qformat:yes;
            mso-style-link:"List Paragraph Char";
            mso-style-type:export-only;
            margin-top:0cm;
            margin-right:0cm;
            margin-bottom:0cm;
            margin-left:36.0pt;
            mso-add-space:auto;
            line-height:106%;
            mso-pagination:widow-orphan;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;
            mso-fareast-font-family:Calibri;
            mso-bidi-font-family:"Times New Roman";
            mso-fareast-language:EN-US;}
        p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
        {mso-style-priority:34;
            mso-style-unhide:no;
            mso-style-qformat:yes;
            mso-style-link:"List Paragraph Char";
            mso-style-type:export-only;
            margin-top:0cm;
            margin-right:0cm;
            margin-bottom:8.0pt;
            margin-left:36.0pt;
            mso-add-space:auto;
            line-height:106%;
            mso-pagination:widow-orphan;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;
            mso-fareast-font-family:Calibri;
            mso-bidi-font-family:"Times New Roman";
            mso-fareast-language:EN-US;}
        span.CommentTextChar
        {mso-style-name:"Comment Text Char";
            mso-style-noshow:yes;
            mso-style-priority:99;
            mso-style-unhide:no;
            mso-style-locked:yes;
            mso-style-link:"Comment Text";
            mso-ansi-font-size:10.0pt;
            mso-bidi-font-size:10.0pt;
            font-family:"Calibri",sans-serif;
            mso-ascii-font-family:Calibri;
            mso-fareast-font-family:Calibri;
            mso-hansi-font-family:Calibri;
            mso-bidi-font-family:"Times New Roman";}
        span.ListParagraphChar
        {mso-style-name:"List Paragraph Char";
            mso-style-priority:34;
            mso-style-unhide:no;
            mso-style-locked:yes;
            mso-style-parent:"";
            mso-style-link:"List Paragraph";
            font-family:"Calibri",sans-serif;
            mso-ascii-font-family:Calibri;
            mso-fareast-font-family:Calibri;
            mso-hansi-font-family:Calibri;
            mso-bidi-font-family:"Times New Roman";}
        span.SpellE
        {mso-style-name:"";
            mso-spl-e:yes;}
        span.GramE
        {mso-style-name:"";
            mso-gram-e:yes;}
        .MsoChpDefault
        {mso-style-type:export-only;
            mso-default-props:yes;
            mso-ascii-font-family:Calibri;
            mso-ascii-theme-font:minor-latin;
            mso-fareast-font-family:Calibri;
            mso-fareast-theme-font:minor-latin;
            mso-hansi-font-family:Calibri;
            mso-hansi-theme-font:minor-latin;
            mso-bidi-font-family:"Times New Roman";
            mso-bidi-theme-font:minor-bidi;
            mso-fareast-language:EN-US;}
        .MsoPapDefault
        {mso-style-type:export-only;
            margin-bottom:8.0pt;
            line-height:107%;}
        @page WordSection1
        {size:595.3pt 841.9pt;
            margin:72.0pt 72.0pt 72.0pt 72.0pt;
            mso-header-margin:35.4pt;
            mso-footer-margin:35.4pt;
            mso-paper-source:0;}
        div.WordSection1
        {page:WordSection1;}
        /* List Definitions */
        @list l0
        {mso-list-id:378549927;
            mso-list-template-ids:-1046287120;}
        @list l0:level1
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:18.0pt;
            text-indent:-18.0pt;
            mso-ansi-font-weight:bold;}
        @list l0:level2
        {mso-level-text:"%1\.%2\.";
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:39.6pt;
            text-indent:-21.6pt;
            mso-ansi-font-weight:normal;}
        @list l0:level3
        {mso-level-text:"%1\.%2\.%3\.";
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:61.2pt;
            text-indent:-25.2pt;
            mso-ansi-font-weight:normal;}
        @list l0:level4
        {mso-level-text:"%1\.%2\.%3\.%4\.";
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:86.4pt;
            text-indent:-32.4pt;}
        @list l0:level5
        {mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:111.6pt;
            text-indent:-39.6pt;}
        @list l0:level6
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            margin-left:136.8pt;
            text-indent:-46.8pt;}
        @list l0:level7
        {mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:162.0pt;
            text-indent:-54.0pt;}
        @list l0:level8
        {mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:187.2pt;
            text-indent:-61.2pt;}
        @list l0:level9
        {mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:216.0pt;
            text-indent:-72.0pt;}
        @list l1
        {mso-list-id:474297418;
            mso-list-type:hybrid;
            mso-list-template-ids:1432494384 1074331675 1074331673 1074331675 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675;}
        @list l1:level1
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            margin-left:97.2pt;
            text-indent:-18.0pt;
            mso-ansi-font-weight:normal;
            mso-bidi-font-weight:normal;}
        @list l1:level2
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:133.2pt;
            text-indent:-18.0pt;}
        @list l1:level3
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            margin-left:169.2pt;
            text-indent:-9.0pt;}
        @list l1:level4
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:205.2pt;
            text-indent:-18.0pt;}
        @list l1:level5
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:241.2pt;
            text-indent:-18.0pt;}
        @list l1:level6
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            margin-left:277.2pt;
            text-indent:-9.0pt;}
        @list l1:level7
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:313.2pt;
            text-indent:-18.0pt;}
        @list l1:level8
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:349.2pt;
            text-indent:-18.0pt;}
        @list l1:level9
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            margin-left:385.2pt;
            text-indent:-9.0pt;}
        @list l2
        {mso-list-id:963657580;
            mso-list-type:hybrid;
            mso-list-template-ids:-1642798262 1074331675 1074331673 1074331675 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675;}
        @list l2:level1
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            margin-left:108.0pt;
            text-indent:-18.0pt;}
        @list l2:level2
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:144.0pt;
            text-indent:-18.0pt;}
        @list l2:level3
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            margin-left:180.0pt;
            text-indent:-9.0pt;}
        @list l2:level4
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:216.0pt;
            text-indent:-18.0pt;}
        @list l2:level5
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:252.0pt;
            text-indent:-18.0pt;}
        @list l2:level6
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            margin-left:288.0pt;
            text-indent:-9.0pt;}
        @list l2:level7
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:324.0pt;
            text-indent:-18.0pt;}
        @list l2:level8
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:360.0pt;
            text-indent:-18.0pt;}
        @list l2:level9
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            margin-left:396.0pt;
            text-indent:-9.0pt;}
        @list l3
        {mso-list-id:1199125826;
            mso-list-type:hybrid;
            mso-list-template-ids:-1560376434 1074331675 1074331673 1074331675 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675;}
        @list l3:level1
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            text-indent:-18.0pt;}
        @list l3:level2
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l3:level3
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            text-indent:-9.0pt;}
        @list l3:level4
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l3:level5
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l3:level6
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            text-indent:-9.0pt;}
        @list l3:level7
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l3:level8
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l3:level9
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            text-indent:-9.0pt;}
        @list l4
        {mso-list-id:1354958340;
            mso-list-type:hybrid;
            mso-list-template-ids:119050236 1074331673 1074331673 1074331675 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675;}
        @list l4:level1
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l4:level2
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l4:level3
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            text-indent:-9.0pt;}
        @list l4:level4
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l4:level5
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l4:level6
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            text-indent:-9.0pt;}
        @list l4:level7
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l4:level8
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l4:level9
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            text-indent:-9.0pt;}
        @list l5
        {mso-list-id:1427531355;
            mso-list-type:hybrid;
            mso-list-template-ids:-57928750 1074331675 1074331673 1074331675 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675;}
        @list l5:level1
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            margin-left:108.0pt;
            text-indent:-18.0pt;}
        @list l5:level2
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:144.0pt;
            text-indent:-18.0pt;}
        @list l5:level3
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            margin-left:180.0pt;
            text-indent:-9.0pt;}
        @list l5:level4
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:216.0pt;
            text-indent:-18.0pt;}
        @list l5:level5
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:252.0pt;
            text-indent:-18.0pt;}
        @list l5:level6
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            margin-left:288.0pt;
            text-indent:-9.0pt;}
        @list l5:level7
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:324.0pt;
            text-indent:-18.0pt;}
        @list l5:level8
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:360.0pt;
            text-indent:-18.0pt;}
        @list l5:level9
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            margin-left:396.0pt;
            text-indent:-9.0pt;}
        @list l6
        {mso-list-id:1521310674;
            mso-list-type:hybrid;
            mso-list-template-ids:-972516556 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675;}
        @list l6:level1
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l6:level2
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l6:level3
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            text-indent:-9.0pt;}
        @list l6:level4
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l6:level5
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l6:level6
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            text-indent:-9.0pt;}
        @list l6:level7
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l6:level8
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            text-indent:-18.0pt;}
        @list l6:level9
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            text-indent:-9.0pt;}
        @list l7
        {mso-list-id:1727413732;
            mso-list-template-ids:1074331679;}
        @list l7:level1
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:18.0pt;
            text-indent:-18.0pt;
            mso-ansi-font-weight:bold;}
        @list l7:level2
        {mso-level-text:"%1\.%2\.";
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:39.6pt;
            text-indent:-21.6pt;
            mso-ansi-font-weight:normal;}
        @list l7:level3
        {mso-level-text:"%1\.%2\.%3\.";
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:61.2pt;
            text-indent:-25.2pt;
            mso-ansi-font-weight:normal;}
        @list l7:level4
        {mso-level-text:"%1\.%2\.%3\.%4\.";
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:86.4pt;
            text-indent:-32.4pt;}
        @list l7:level5
        {mso-level-text:"%1\.%2\.%3\.%4\.%5\.";
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:111.6pt;
            text-indent:-39.6pt;}
        @list l7:level6
        {mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.";
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:136.8pt;
            text-indent:-46.8pt;}
        @list l7:level7
        {mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.";
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:162.0pt;
            text-indent:-54.0pt;}
        @list l7:level8
        {mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.";
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:187.2pt;
            text-indent:-61.2pt;}
        @list l7:level9
        {mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9\.";
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:216.0pt;
            text-indent:-72.0pt;}
        @list l8
        {mso-list-id:1818497891;
            mso-list-type:hybrid;
            mso-list-template-ids:-1453297720 -1593389794 1074331673 1074331675 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675;}
        @list l8:level1
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:114.0pt;
            text-indent:-36.0pt;}
        @list l8:level2
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:89.5pt;
            text-indent:-18.0pt;}
        @list l8:level3
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            margin-left:125.5pt;
            text-indent:-9.0pt;}
        @list l8:level4
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:161.5pt;
            text-indent:-18.0pt;}
        @list l8:level5
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:197.5pt;
            text-indent:-18.0pt;}
        @list l8:level6
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            margin-left:233.5pt;
            text-indent:-9.0pt;}
        @list l8:level7
        {mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:269.5pt;
            text-indent:-18.0pt;}
        @list l8:level8
        {mso-level-number-format:alpha-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:305.5pt;
            text-indent:-18.0pt;}
        @list l8:level9
        {mso-level-number-format:roman-lower;
            mso-level-tab-stop:none;
            mso-level-number-position:right;
            margin-left:341.5pt;
            text-indent:-9.0pt;}
        @list l9
        {mso-list-id:1969581326;
            mso-list-type:hybrid;
            mso-list-template-ids:440813748 1074331653 1074331651 1074331653 1074331649 1074331651 1074331653 1074331649 1074331651 1074331653;}
        @list l9:level1
        {mso-level-number-format:bullet;
            mso-level-text:\F0A7;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:144.0pt;
            text-indent:-18.0pt;
            font-family:Wingdings;}
        @list l9:level2
        {mso-level-number-format:bullet;
            mso-level-text:o;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:180.0pt;
            text-indent:-18.0pt;
            font-family:"Courier New";}
        @list l9:level3
        {mso-level-number-format:bullet;
            mso-level-text:\F0A7;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:216.0pt;
            text-indent:-18.0pt;
            font-family:Wingdings;}
        @list l9:level4
        {mso-level-number-format:bullet;
            mso-level-text:\F0B7;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:252.0pt;
            text-indent:-18.0pt;
            font-family:Symbol;}
        @list l9:level5
        {mso-level-number-format:bullet;
            mso-level-text:o;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:288.0pt;
            text-indent:-18.0pt;
            font-family:"Courier New";}
        @list l9:level6
        {mso-level-number-format:bullet;
            mso-level-text:\F0A7;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:324.0pt;
            text-indent:-18.0pt;
            font-family:Wingdings;}
        @list l9:level7
        {mso-level-number-format:bullet;
            mso-level-text:\F0B7;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:360.0pt;
            text-indent:-18.0pt;
            font-family:Symbol;}
        @list l9:level8
        {mso-level-number-format:bullet;
            mso-level-text:o;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:396.0pt;
            text-indent:-18.0pt;
            font-family:"Courier New";}
        @list l9:level9
        {mso-level-number-format:bullet;
            mso-level-text:\F0A7;
            mso-level-tab-stop:none;
            mso-level-number-position:left;
            margin-left:432.0pt;
            text-indent:-18.0pt;
            font-family:Wingdings;}
        ol
        {margin-bottom:0cm;}
        ul
        {margin-bottom:0cm;}
        -->
    </style>
</head>

<body lang="EN-IN" style="tab-interval:36.0pt;word-wrap:break-word;margin: 15;" onfocusout="parent.setEmailRange();" data-new-gr-c-s-loaded="14.997.0">

<script src="/script.js"></script>
<div style="text-align: center;">
    <img src="Logo.png" style="max-height:100px;"/>
</div>



<div class="WordSection1" style="margin: 25;">
    <br>
    <p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:20.0pt;line-height:106%;font-family:Algerian;color:#0070C0">CONSENT
AND WAIVER AGREEMENT <o:p></o:p></span></p>

    <p class="MsoNoSpacing"><o:p>&nbsp;</o:p></p>

    <p class="MsoListParagraphCxSpFirst" style="text-align:justify;text-indent:-36.0pt;
line-height:105%;mso-list:l7 level1 lfo1"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen"><span style="mso-list:Ignore">1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><!--[endif]--><b><span style="font-family:&quot;Sylfaen&quot;,serif">Background</span></b><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">1.1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">For
the purpose of this Consent and Waiver Agreement ("<b>Agreement</b>"), all the
capitalised words shall have the same meaning as prescribed to them in the
terms of use or privacy policy documents available on website run by
Microgravity Ventures Private Limited ("<b>Company</b>"). <o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">1.2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">For
the purpose of this Agreement, wherever the context so requires&nbsp;"<b style="mso-bidi-font-weight:normal">you</b>", "<b style="mso-bidi-font-weight:
normal">your</b>", "<b style="mso-bidi-font-weight:normal">user</b>" or "<b style="mso-bidi-font-weight:normal">customer</b>"&nbsp;shall mean any natural
or legal person who visits the Company Premise to use the Company Products. The
term&nbsp;"<b style="mso-bidi-font-weight:normal">we</b>",&nbsp;"<b style="mso-bidi-font-weight:normal">us</b>",&nbsp;"<b style="mso-bidi-font-weight:
normal">our</b>"&nbsp;shall mean the Company.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><span style="mso-spacerun:yes">&nbsp;</span><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">1.3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">By
purchasing the tickets to use the Company Products you are agreeing to the
terms and conditions stated in this Agreement.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-36.0pt;
line-height:105%;mso-list:l7 level1 lfo1"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen"><span style="mso-list:Ignore">2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif">Capacity and Authority</span></b><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">2.1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">By
agreeing to use the Company Products, you confirm that you are above 18 years
of age, and not a minor and are competent to contract as understood within the
meaning of the Indian Contract Act, 1872.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">2.2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">In the
event that you are purchasing the ticket for any minor, then you warrant that
you have full authority as or on behalf of the parent or legal guardian of such
minor.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">2.3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">By
using the Company Products, you warrant that all the data provided by you at
the time of purchase of the ticket is accurate and complete and that you have
obtained the consent of parent/legal guardian (in case of minors).<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle"><b><span style="font-family:&quot;Sylfaen&quot;,serif;
color:black;mso-themecolor:text1"><o:p>&nbsp;</o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">2.4.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">PG
(Parental Guidance) Rated Games <o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:2.0cm;mso-add-space:auto;text-indent:-2.0cm;
mso-text-indent-alt:-7.05pt;line-height:normal;mso-list:l2 level1 lfo2;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>i.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;color:black;mso-themecolor:text1">Free Roam<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:2.0cm;mso-add-space:auto;text-indent:-2.0cm;
mso-text-indent-alt:-7.05pt;line-height:normal;mso-list:l2 level1 lfo2;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>ii.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;color:black;mso-themecolor:text1">VR Team<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:2.0cm;mso-add-space:auto;text-indent:-2.0cm;
mso-text-indent-alt:-7.05pt;line-height:normal;mso-list:l2 level1 lfo2;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>iii.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;color:black;mso-themecolor:text1">360<span>°</span> Chair
<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:49.65pt;mso-add-space:
auto;text-align:justify;text-indent:-1.0cm;line-height:105%;mso-list:l7 level3 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">2.4.1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">Access
to the Consent &amp; Waiver forms<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:3.0cm;mso-add-space:
auto;text-indent:-3.0cm;mso-text-indent-alt:-14.15pt;line-height:105%;
mso-list:l6 level3 lfo3"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen;color:black;
mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>i.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
color:black;mso-themecolor:text1">Can be downloaded from the website.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:3.0cm;mso-add-space:
auto;text-indent:-3.0cm;mso-text-indent-alt:-14.15pt;line-height:105%;
mso-list:l6 level3 lfo3"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen;color:black;
mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>ii.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
color:black;mso-themecolor:text1">Sent to the customers email-id along with the
invoice.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:3.0cm;mso-add-space:
auto;text-indent:-3.0cm;mso-text-indent-alt:-14.15pt;line-height:105%;
mso-list:l6 level3 lfo3"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen;color:black;
mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>iii.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
color:black;mso-themecolor:text1">Sent to the customers email-id with the
gameplay reminder e-mail.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:3.0cm;mso-add-space:
auto;text-indent:-3.0cm;mso-text-indent-alt:-14.15pt;line-height:105%;
mso-list:l6 level3 lfo3"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen;color:black;
mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>iv.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
color:black;mso-themecolor:text1">Available at the stores ticketing counter.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:3.0cm;mso-add-space:
auto;text-indent:-3.0cm;mso-text-indent-alt:-14.15pt;line-height:105%;
mso-list:l6 level3 lfo3"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen;color:black;
mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>v.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
color:black;mso-themecolor:text1">Available with the gaming associate handling
the PG rated games.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:108.0pt;mso-add-space:
auto;text-align:justify;line-height:105%"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:49.65pt;mso-add-space:
auto;text-align:justify;text-indent:-1.0cm;line-height:105%;mso-list:l7 level3 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore">2.4.2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;color:black;mso-themecolor:text1">Consent
&amp; Waiver process for Players between the age of 12 - 15 years<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;mso-add-space:auto;text-indent:-92.15pt;
mso-text-indent-alt:-19.2pt;line-height:normal;mso-list:l1 level1 lfo4;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>i.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">For players
between the age of 12 -15 years, during online bookings the Consent &amp;
Waiver checkbox needs to be ticked by their parent/ guardian.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;mso-add-space:auto;text-indent:-92.15pt;
mso-text-indent-alt:-19.2pt;line-height:normal;mso-list:l1 level1 lfo4;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>ii.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">Players between
the age of 12 to 15 years should be accompanied by their parent/guardian to
sign the Consent &amp; Waiver form in-order to play the PG rated games. <b><o:p></o:p></b></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;mso-add-space:auto;text-indent:-92.15pt;
mso-text-indent-alt:-19.2pt;line-height:normal;mso-list:l1 level1 lfo4;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>iii.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><b><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">Players between
the age of 12 to 15 years, who have booked a PG rated gameplay online and are
unaccompanied by their parent/guardian would not be permitted to play these
games. <o:p></o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;mso-add-space:auto;text-indent:-92.15pt;
mso-text-indent-alt:-19.2pt;line-height:normal;mso-list:l1 level1 lfo4;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>iv.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><b><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">Players between
the age of 12 to 15 years, will not be allowed to book a PG rated gameplay at
the store if unaccompanied by their parent/guardian.<o:p></o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;mso-add-space:auto;text-indent:-92.15pt;
mso-text-indent-alt:-19.2pt;line-height:normal;mso-list:l1 level1 lfo4;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>v.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">To play Golf, players
between the age 10 years to 15 years should be accompanied by their parent/
guardian. <o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:108.0pt;mso-add-space:
auto;text-align:justify;line-height:105%"><span style="font-family:&quot;Sylfaen&quot;,serif;
color:black;mso-themecolor:text1"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:49.65pt;mso-add-space:
auto;text-align:justify;text-indent:-1.0cm;line-height:105%;mso-list:l7 level3 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore">2.4.3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-bidi-font-family:Calibri;color:black;
mso-themecolor:text1">Consent &amp; Waiver process for players between the age
of 15 to 18 years</span><span style="font-family:&quot;Sylfaen&quot;,serif;color:black;
mso-themecolor:text1"><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;mso-add-space:auto;text-indent:-92.15pt;
mso-text-indent-alt:-21.25pt;line-height:normal;mso-list:l5 level1 lfo5;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>i.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">For players
between the age of 15 to 18 years, during online bookings the Consent &amp;
Waiver checkbox needs to be ticked by the parent/ guardian.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;mso-add-space:auto;text-indent:-92.15pt;
mso-text-indent-alt:-21.25pt;line-height:normal;mso-list:l5 level1 lfo5;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>ii.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">Players between
the age of 15 to 18 years, who have booked a PG rated gameplay online/offline
need to get a hard copy of the Consent &amp; Waiver form co-signed by their
parent/ guardian.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;mso-add-space:auto;text-indent:-92.15pt;
mso-text-indent-alt:-21.25pt;line-height:normal;mso-list:l5 level1 lfo5;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>iii.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">For players
between the age of 15 to 18 years, who have booked a PG rated gameplay online
and are unaccompanied by their parent/guardian, the Digital Waiver process can
be used to obtain Consent. <o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;mso-add-space:auto;text-indent:-92.15pt;
mso-text-indent-alt:-21.25pt;line-height:normal;mso-list:l5 level1 lfo5;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>iv.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">For offline
bookings, if players between the age of 15 to 18 years are unaccompanied by
their parent/guardian and want to book a PG rated game then, the Digital Waiver
process can be used to obtain consent.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:72.0pt;mso-add-space:
auto;text-align:justify;line-height:105%"><span style="font-family:&quot;Sylfaen&quot;,serif;
color:black;mso-themecolor:text1"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:49.65pt;mso-add-space:
auto;text-align:justify;text-indent:-1.0cm;line-height:105%;mso-list:l7 level3 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore">2.4.4.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-bidi-font-family:Calibri;color:black;
mso-themecolor:text1">Consent &amp; Waiver process for 18 years and above</span><span style="font-family:&quot;Sylfaen&quot;,serif;color:black;mso-themecolor:text1"><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;mso-add-space:auto;text-indent:-92.15pt;
mso-text-indent-alt:-21.25pt;line-height:normal;mso-list:l0 level6 lfo6;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>i.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">For all bookings
on the website the Consent &amp; Waiver checkbox needs to be ticked by the
customer.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:92.15pt;mso-add-space:auto;text-indent:-92.15pt;
mso-text-indent-alt:-21.25pt;line-height:normal;mso-list:l0 level6 lfo6;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>ii.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">Players above 18
years of age need to sign a hard copy </span><span style="font-family:&quot;Sylfaen&quot;,serif;
color:black;mso-themecolor:text1">of the Consent &amp; Waiver form at the store
to play PG rated games.</span><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1"><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:61.2pt;mso-add-space:
auto;text-align:justify;line-height:105%"><span style="font-family:&quot;Sylfaen&quot;,serif;
color:black;mso-themecolor:text1"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:49.65pt;mso-add-space:
auto;text-align:justify;text-indent:-1.0cm;line-height:105%;mso-list:l7 level3 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore">2.4.5.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;color:black;mso-themecolor:text1">Digital
Waiver Process Description<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:1.95pt;margin-left:99.25pt;mso-add-space:auto;text-indent:-99.25pt;
mso-text-indent-alt:-1.0cm;line-height:normal;mso-list:l3 level1 lfo7;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>i.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">When players
between the age of 15 to 18 years approach the ticketing counter to book a PG
rated gameplay. <o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:99.25pt;mso-add-space:auto;text-indent:-99.25pt;
mso-text-indent-alt:-1.0cm;line-height:normal;mso-list:l3 level1 lfo7;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>ii.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">Ticketing
personnel will:<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:144.0pt;mso-add-space:auto;text-indent:-18.0pt;
line-height:normal;mso-list:l9 level1 lfo8;mso-layout-grid-align:none;
text-autospace:none"><!--[if !supportLists]--><span style="font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings;color:black;
mso-themecolor:text1"><span style="mso-list:Ignore">§<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">confirm absence
of their parent/ guardian and request the player for their parent/ guardians’ mobile
number in-order to begin the digital waiver process. <o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:1.85pt;margin-left:144.0pt;mso-add-space:auto;text-indent:-18.0pt;
line-height:normal;mso-list:l9 level1 lfo8;mso-layout-grid-align:none;
text-autospace:none"><!--[if !supportLists]--><span style="font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings;color:black;
mso-themecolor:text1"><span style="mso-list:Ignore">§<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">input the mobile
number of the parent/ guardian on the order form. <o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:1.85pt;margin-left:144.0pt;mso-add-space:auto;text-indent:-18.0pt;
line-height:normal;mso-list:l9 level1 lfo8;mso-layout-grid-align:none;
text-autospace:none"><!--[if !supportLists]--><span style="font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings;color:black;
mso-themecolor:text1"><span style="mso-list:Ignore">§<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">call the mobile
number to confirm the identity of the parent/guardian and inform them about the
Consent &amp; Waiver message. <o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:1.85pt;margin-left:144.0pt;mso-add-space:auto;text-indent:-18.0pt;
line-height:normal;mso-list:l9 level1 lfo8;mso-layout-grid-align:none;
text-autospace:none"><!--[if !supportLists]--><span style="font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings;color:black;
mso-themecolor:text1"><span style="mso-list:Ignore">§<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">send an SMS with
the short link to the mobile number. <o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:99.25pt;mso-add-space:auto;line-height:normal;
mso-layout-grid-align:none;text-autospace:none"><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:1.85pt;margin-left:99.25pt;mso-add-space:auto;text-indent:-99.25pt;
mso-text-indent-alt:-1.0cm;line-height:normal;mso-list:l3 level1 lfo7;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>iii.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">On clicking the
short link, a web page with the Consent &amp; Waiver form will open and the
parent/ guardian needs to read the form and tick the checkbox agreeing to the
terms of the Consent &amp; Waiver and revert. <o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:1.85pt;margin-left:99.25pt;mso-add-space:auto;text-indent:-99.25pt;
mso-text-indent-alt:-1.0cm;line-height:normal;mso-list:l3 level1 lfo7;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black;mso-themecolor:text1"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>iv.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">Only once this
information is received at our end, we will be able to complete the booking
process. <o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:1.85pt;margin-left:99.25pt;mso-add-space:auto;text-indent:-99.25pt;
mso-text-indent-alt:-1.0cm;line-height:normal;mso-list:l3 level1 lfo7;
mso-layout-grid-align:none;text-autospace:none"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;color:black"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>v.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1">The printout of
the form needs to be co-signed by the player and handed over to the gaming
associate handling the PG rated gaming equipment in-order to start gameplay. </span><span style="font-family:&quot;Sylfaen&quot;,serif;mso-bidi-font-family:Calibri;color:black"><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:99.25pt;mso-add-space:auto;line-height:normal;
mso-layout-grid-align:none;text-autospace:none"><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-family:Calibri;color:black;mso-themecolor:text1"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-36.0pt;
line-height:105%;mso-list:l7 level1 lfo1"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen"><span style="mso-list:Ignore">3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif">Acknowledgement of Risk</span></b><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">3.1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">The
Company Products include virtual reality simulation technology and equipment’s,
use of motion capture and tracking technology, wireless controllers, head
mounted virtual reality displays, untethered virtual reality simulation
technology and equipment for gaming, simulation, walk throughs, training
exercises.<span style="mso-spacerun:yes">&nbsp; </span><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">3.2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">You acknowledge
and agree that physical injuries including but not limited to cuts and bruises,
broken bones, injuries to other body parts, and mental shock may be caused due
to (<span class="SpellE">i</span>) normal use of the Company Products; (ii)
negligence on part of the user while use of the Company Products; or (iii)
contact with other users. In exceptional circumstances, users may also suffer
permanent disability or death from injuries suffered by use of the Company
Products.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">3.3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">You
acknowledge and agree that use of Company Products is dangerous and still
desire to use the Company Products and stay at the Company Premise at your own
risk and expressly assume and accept all risks in relation to Company Premise
and Company Products. <o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-36.0pt;
line-height:105%;mso-list:l7 level1 lfo1"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen"><span style="mso-list:Ignore">4.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif">Waiver<o:p></o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">4.1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-weight:bold">To the fullest extent permitted by law, you hereby (<span class="SpellE">i</span>) waive any and all claims; (ii) discharge the Company
from any liability, arising out of any personal injury or death or any property
damage caused due to use of Company Products or otherwise on Company Premise,
save and to the extent found to be directly caused by Company’s negligence or
negligence of any of the employee, agent, supervisor of the Company. </span><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p></o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-36.0pt;
line-height:105%;mso-list:l7 level1 lfo1"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen"><span style="mso-list:Ignore">5.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif">Indemnity</span></b><span style="font-family:
&quot;Sylfaen&quot;,serif"><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">5.1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">You agree
to indemnify, defend and hold harmless the Company, and our affiliates,
officers, partners, employees, consultants and representatives, from and
against all losses, expenses, damages, costs, claims and demands, including
reasonable attorney's fees and related costs and expenses, due to or arising
out of<span style="mso-spacerun:yes">&nbsp; </span>(<span class="SpellE">i</span>)
your negligence, omission, act, conduct or behaviour while using the Company
Product or by being present on the Company Premise; (ii) any or all claims
against the Company despite your consent to this Agreement; and (iii) where any
information you submit, email, or otherwise transmit to us violates third party
rights or any applicable laws.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">5.2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">You
agree to use the Company Product or stay on the Company Premise in a
responsible manner and shall not compromise your own safety and safety of any
other person. <a name="_Hlk37845361">In the event you cause any physical
injuries to other person or damage any equipment related to Company Product,
you acknowledge and agree that you shall be liable to pay for such damage
caused by you.</a><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">5.3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">The
above Clauses 5.1 and 5.2 shall be applicable on the individual who purchases
the ticket for any third person or any minor. <o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom:0cm;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level1 lfo1"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen"><span style="mso-list:Ignore">6.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><!--[endif]--><b><span style="font-family:&quot;Sylfaen&quot;,serif">Unattended
Children, Property and Belongings</span></b><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom:0cm;mso-add-space:
auto;text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">6.1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">You
undertake that you will not leave your child unattended in the Company Premise
if such child is below the age of 14 (fourteen) years ("<b>Child</b>" or "<b>Children</b>")
at any point of time. <a name="_Hlk37845552">The Company and our affiliates,
officers, partners, employees, consultants and representatives shall not be
held responsible for security of any unattended Children in the Company
Premise.<o:p></o:p></a></span></p>

    <span style="mso-bookmark:_Hlk37845552"></span>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">6.2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">You
agree and acknowledge that you shall not be allowed to enter the game, if there
is no person to supervise your Children. In such cases your entry will be
forfeited, and you will not receive any refund for the forfeiture. We recommend
that you arrive at the Company Premise with someone to supervise your Children
while you are enjoying the game.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">6.3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">You undertake
full responsibility of your own belongings at the Company Premise. <a name="_Hlk37845522">The Company shall not be liable in case of any loss or
damage to your belongings. <o:p></o:p></a></span></p>

    <span style="mso-bookmark:_Hlk37845522"></span>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom:0cm;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level1 lfo1"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen"><span style="mso-list:Ignore">7.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif">Consent for Use of Images</span></b><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">7.1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-weight:bold">You acknowledge that the Company may have installed
closed circuit cameras at the Company Premise for security purposes. You hereby
provide your consent to videos being taken for security purposes. </span><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p></o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">7.2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-bidi-font-weight:bold">Additionally, you hereby provide your consent to
images and videos being taken for promotional purposes. The Company shall be
the exclusive owner of such images and videos, and you agree to free
publication or use in any form or media of such images and videos without any
compensation.</span><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p></o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-36.0pt;
line-height:105%;mso-list:l7 level1 lfo1"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen"><span style="mso-list:Ignore">8.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><!--[endif]--><b><span style="font-family:&quot;Sylfaen&quot;,serif">Late
Arrival</span></b><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">8.1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">You
agree and acknowledge that the use of Company Products is in back-to-back sessions
and therefore you must reach the Company Premise at least 30 minutes prior to
your scheduled session.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">8.2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">In
case of the virtual reality games and services, the instructor appointed by the
Company shall start the suit-up process 5-10 minutes prior to every session. In
the event you arrive after the initiation of the suit-up process, you will not
be allowed to enter the game.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">8.3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">You
agree and acknowledge that in the event you are not allowed to enter the game
due to your late arrival, the Company shall not be liable to refund the ticket
price to you.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">8.4.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">In the
event you book a team virtual reality game or service and any of your teammates
are late. You may choose to wait for them, however in such circumstances <span class="GramE">your</span> in-game time will be reduced accordingly. In such cases
decision of the instructor appointed by the Company shall be final and binding.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-36.0pt;
line-height:105%;mso-list:l7 level1 lfo1"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen"><span style="mso-list:Ignore">9.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif">Compliance</span></b><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-36.0pt"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">9.1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">You
warrant that you shall comply with all the signs, signals, notices, directions,
and instructions provided by the instructor before, during or after the use of
Company Products. In the event you fail to comply with the signs, signals,
notices, directions, and instructions provided by the instructor, the Company,
at its sole discretion, reserves the right to cancel your ticket and remove you
from the Company Premise without any refund or compensation.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">9.2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">You
warrant that you shall follow all the safety guidelines provided to you by the instructor
before, during or after the use of Company Products or the Company for general
behaviour in the Company Premise.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom:0cm;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level1 lfo1"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen"><span style="mso-list:Ignore">10.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif">Declaration for Use of Virtual Reality
Products</span></b><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">10.1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">You
shall comply with following requirements in order to use some of the Company Products
offering virtual reality games and services:<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:70.9pt;mso-add-space:
auto;text-align:justify;text-indent:-49.6pt;line-height:105%;mso-list:l7 level3 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">10.1.1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">You
warrant that you and minors (in case the ticket is purchased for the minors)
are in good health (both physical and mental) and free from any medical
conditions, including but not limited to <o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:99.25pt;mso-add-space:
auto;text-align:justify;text-indent:-1.0cm;line-height:105%;mso-list:l8 level1 lfo9"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">i.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">Epilepsy
and similar seizure disorders;<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:99.25pt;mso-add-space:
auto;text-align:justify;text-indent:-1.0cm;line-height:105%;mso-list:l8 level1 lfo9"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">ii.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">Having
implanted pacemakers;<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:99.25pt;mso-add-space:
auto;text-align:justify;text-indent:-1.0cm;line-height:105%;mso-list:l8 level1 lfo9"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">iii.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">Deafness
or severe hearing loss;<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:99.25pt;mso-add-space:
auto;text-align:justify;text-indent:-1.0cm;line-height:105%;mso-list:l8 level1 lfo9"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">iv.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">Broken
leg or arm and wearing casts;<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:99.25pt;mso-add-space:
auto;text-align:justify;text-indent:-1.0cm;line-height:105%;mso-list:l8 level1 lfo9"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">v.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">Being
a wheelchair user;<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:99.25pt;mso-add-space:
auto;text-align:justify;text-indent:-1.0cm;line-height:105%;mso-list:l8 level1 lfo9"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">vi.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">Heart
condition; <o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:99.25pt;mso-add-space:
auto;text-align:justify;text-indent:-1.0cm;line-height:105%;mso-list:l8 level1 lfo9"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">vii.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">Pregnancy;<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:99.25pt;mso-add-space:
auto;text-align:justify;text-indent:-1.0cm;line-height:105%;mso-list:l8 level1 lfo9"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">viii.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">Any
other serious illness that is capable of hindering your ability to participate
in the gaming events.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:35.45pt;mso-add-space:
auto;text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:70.9pt;mso-add-space:
auto;text-align:justify;text-indent:-49.6pt;line-height:105%;mso-list:l7 level3 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">10.1.2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">You
acknowledge and agree that use of virtual reality products may affect adversely
in case of pregnancy and hence you are required to seek medical advice before
engaging in any virtual reality activity. (<i>Applicable in case of women</i>)<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:35.45pt;mso-add-space:
auto;text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:70.9pt;mso-add-space:
auto;text-align:justify;text-indent:-49.6pt;line-height:105%;mso-list:l7 level3 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">10.1.3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">You
have not consumed any liquor, drugs (including prescription drugs if you do not
have a prescription from a valid medical professional for the same, which may
be required to be produced at the Company Premise) or other narcotics substance
and shall not carry such substances during your presence at the Company
Premise.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:35.45pt;mso-add-space:
auto;text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:39.6pt;mso-add-space:
auto;text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">10.2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">The
Company at its sole discretion, reserves the right to selectively apply the requirements
laid down in Clause 10.1 above to the virtual reality games and other services
offered in Company Products. You agree and acknowledge that the above
requirements may or may not apply to all the Company Products offering virtual
reality games and services.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpLast" style="margin-left:39.6pt;mso-add-space:auto;
text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">10.3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">The
Company shall not be responsible for your failure to disclose any medical
condition laid down in Clause 10.1.1 above, to the relevant staff members at
the Company Premise, prior to issuance of a ticket for a gaming event. Further,
the Company shall have no liability to refund the ticket amount to you in the
event that it is found that you failed to disclose your medical condition at
the time of purchasing the ticket.<o:p></o:p></span></p>

    <p class="MsoNormal" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpFirst" style="margin-bottom:0cm;mso-add-space:auto;
text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level1 lfo1"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen"><span style="mso-list:Ignore">11.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif">Reservation of right of entry<o:p></o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:35.45pt;mso-add-space:
auto;text-align:justify;text-indent:-35.45pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;mso-bidi-font-weight:bold"><span style="mso-list:Ignore">11.1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-bidi-font-weight:bold">The Company
reserves the right to refuse entrance to anyone found to be in violation of the
terms of this Agreement. Further, at its discretion, the Company shall have the
right to conduct temperature checks on all players and visitors seeking entry
to the Company Premise using thermal temperature scanners, and to refuse entry
to any player/visitor found to have a temperature above normal human
temperature.<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-left:35.45pt;mso-add-space:
auto;text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif;mso-bidi-font-weight:
bold"><span style="mso-spacerun:yes">&nbsp;</span><o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpLast" style="margin-left:35.45pt;mso-add-space:
auto;text-align:justify;text-indent:-35.45pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen;mso-bidi-font-weight:bold"><span style="mso-list:Ignore">11.2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-bidi-font-weight:bold">The Company
reserves the right to request players / visitors to leave the Company Premise
if they are found to be in violation of any of the terms of this Agreement, or
any other rules communicated to the players and visitors on their entry into
the Company Premise. FURTHER, THE COMPANY RESERVES THE RIGHT TO REQUEST
PLAYERS/VISITORS TO EXIT THE COMPANY PREMISE IF THEY ARE FOUND TO BE EXBITING KNOWN
SYMPTOMS OF COVID-19.<span style="mso-spacerun:yes">&nbsp; </span><o:p></o:p></span></p>

    <p class="MsoNormal" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpFirst" style="margin-bottom:0cm;mso-add-space:auto;
text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level1 lfo1"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen"><span style="mso-list:Ignore">12.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif">Severability<o:p></o:p></span></b></p>

    <p class="MsoListParagraphCxSpMiddle" style="margin-bottom:0cm;mso-add-space:
auto;text-align:justify;line-height:105%"><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></b></p>

    <p class="MsoListParagraphCxSpLast" style="margin-left:39.6pt;mso-add-space:auto;
text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level2 lfo1"><!--[if !supportLists]--><span style="font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:Sylfaen;mso-bidi-font-family:
Sylfaen"><span style="mso-list:Ignore">12.1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span style="font-family:&quot;Sylfaen&quot;,serif">If any
part of the Terms of Use <span class="GramE">are</span> determined to be invalid
or unenforceable pursuant to Applicable Laws of India, including, but not
limited to, the warranty disclaimers and liability limitations set forth above,
then the invalid or unenforceable provision will be deemed to be superseded by
a valid, enforceable provision that most closely matches the intent of the
original provision and the remainder of the Terms of Use shall continue in
effect.<o:p></o:p></span></p>

    <p class="MsoNormal" style="margin-bottom:0cm;text-align:justify;line-height:
105%"><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></b></p>

    <p class="MsoListParagraphCxSpFirst" style="margin-bottom:0cm;mso-add-space:auto;
text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level1 lfo1"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span style="font-family:&quot;Sylfaen&quot;,serif;
mso-fareast-font-family:Sylfaen;mso-bidi-font-family:Sylfaen"><span style="mso-list:Ignore">13.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><!--[endif]--><b><span style="font-family:&quot;Sylfaen&quot;,serif">Also,
I state that</span></b><span style="font-family:&quot;Sylfaen&quot;,serif">:<o:p></o:p></span></p>

    <p class="MsoListParagraphCxSpLast" style="margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:18.0pt;mso-add-space:auto;text-align:justify;
line-height:105%"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoCommentText" style="margin-top:0cm;margin-right:0cm;margin-bottom:
0cm;margin-left:72.0pt;text-indent:-18.0pt;mso-list:l4 level2 lfo10"><!--[if !supportLists]--><span style="font-size:11.0pt;font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:
Sylfaen;mso-bidi-font-family:Sylfaen"><span style="mso-list:Ignore">a.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style="font-size:11.0pt;font-family:&quot;Sylfaen&quot;,serif">I am not suffering from
flu-like symptoms: fever, cough, breathlessness, sore throat, etc.;<o:p></o:p></span></p>

    <p class="MsoCommentText" style="margin-top:0cm;margin-right:0cm;margin-bottom:
0cm;margin-left:72.0pt;text-indent:-18.0pt;mso-list:l4 level2 lfo10"><!--[if !supportLists]--><span style="font-size:11.0pt;font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:
Sylfaen;mso-bidi-font-family:Sylfaen"><span style="mso-list:Ignore">b.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style="font-size:11.0pt;font-family:&quot;Sylfaen&quot;,serif">I have not come into
contact with any known Covid-19 case in the last 14 days;<o:p></o:p></span></p>

    <p class="MsoCommentText" style="margin-top:0cm;margin-right:0cm;margin-bottom:
0cm;margin-left:72.0pt;text-indent:-18.0pt;mso-list:l4 level2 lfo10"><!--[if !supportLists]--><span style="font-size:11.0pt;font-family:&quot;Sylfaen&quot;,serif;mso-fareast-font-family:
Sylfaen;mso-bidi-font-family:Sylfaen"><span style="mso-list:Ignore">c.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style="font-size:11.0pt;font-family:&quot;Sylfaen&quot;,serif">I understand that
while Microgravity is taking all necessary safety and hygiene precautions, it
cannot be held liable if a Player or Visitor is diagnosed with Covid-19.<o:p></o:p></span></p>

    <p class="MsoNormal" style="text-align:justify"><span style="font-family:&quot;Sylfaen&quot;,serif"><o:p>&nbsp;</o:p></span></p>

    <p class="MsoListParagraphCxSpFirst" style="margin-bottom:0cm;mso-add-space:auto;
text-align:justify;text-indent:-36.0pt;line-height:105%;mso-list:l7 level1 lfo1"><b>I certify and confirm that the information I have entered is accurate and true.</b></p>
    <br>
</div>
<div class="outer-container">
    <div class="eachsection-inner">
        <div class="eachsection-container">
            <!--background-color:gainsboro; text-align:center; -->
            <label for="Name"><b>Guardian Name:</b></label><br />
            <input id="txtGuardian" type="text" class="textarea" placeholder="Guardian Name"  />

            <button type="button" class="button" onclick="confirmParentConsent();">I Accept</button>

            <!--<button type="button" class="button" onclick="fun_parantalconset('9999162428','3c5c3c89-c9a0-ea11-a812-000d3a0a7551');">Send Short Link</button>-->
            <!--<button type="button" style="text-align:right;padding:3px; margin:5px 0px 0px 0px;" onclick="setTimeout('document.getElementById(\'' + this.id + '\').disabled=true;', 50);">I Accept</button>-->
        </div>
    </div>
</div>
</div>
</div>
<br><br><br><br>
<div id="footer" class="eachsection-outer section-contactUs highLight">
    <div class="outer-container">
        <div class="eachsection-inner">
            <div class="footerContactNo">
                <div class="eachContact">

                    <div class="contactText"><a href="mailto:queries@microgravity.co.in">queries@microgravity.co.in</a></div>
                </div>
            </div>


            <div class="footer-container">
                <div class="footer-inner">Copyright © 2020 MICROGRAVITY - All Rights Reserved.</div>
            </div>

        </div>
    </div>
</div>
</body>

</html>