-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2020 年 11 月 05 日 12:53
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `map`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`, `comment`) VALUES
(8, '玉ひで', '〒103-0013 東京都中央区日本橋人形町１丁目１７−１０', 35.685024, 139.782959, 'restaurant', 'おいしいけどコスパ悪いかも。親子丼なら、なかうでいいやって感じ。店の雰囲気は良いこここ'),
(11, '金魚', '〒103-0013 東京都中央区日本橋人形町２丁目３１−１', 35.686485, 139.785110, 'sake', '安くて美味しくて最高！！おでんがたまらない！！！'),
(12, '山灯香', '〒154-0004 東京都世田谷区太子堂１丁目４−３', 35.646702, 139.677628, 'restaurant', '夜おそばといえばここ。蕎麦もおいしいけど、つまみが最高！！夜遅くまでやってる！でででででで'),
(13, 'ボンディ神田小川町店', '〒101-0052 東京都千代田区神田小川町３丁目９', 35.694107, 139.761734, 'restaurant', '本店よりも小川町店の方がおいしいのは謎。やっぱりチキンカレーがおいしいなー'),
(14, '亀戸ホルモン本店', '〒136-0071 東京都江東区亀戸５丁目４−９', 35.698669, 139.827164, 'sake', 'ホルモン食べたくなったらここ。甘辛のタレも絶品。あれだけで白飯何杯でもいける！'),
(15, 'もつ焼き 大統領 支店', '〒110-0005 東京都台東区上野６丁目１３−２', 35.710392, 139.775330, 'sake', '上野にきたら立ち寄りたい名店。おすすめはセンマイ刺し。煮込みも普通においしい'),
(16, 'Mikkeller Tokyo', '〒150-0043 東京都渋谷区道玄坂２丁目１９−１１', 35.659637, 139.696030, 'sake', 'クラフトビールが飲みたいときはここ。店員の愛想はあまりよくないけれど、おいしいビールを飲んだらそれもどうでもよくなる。'),
(17, '馬肉食堂さくら', '〒164-0001 東京都中野区中野５丁目４６−４ 山和ビル 1階', 35.708267, 139.667023, 'sake', '安くておいしい！馬肉ユッケと麻婆豆腐がおすすめ！'),
(18, 'すしBAR小路小路', '〒135-0004 東京都江東区森下１丁目１５−１', 35.688602, 139.797440, 'restaurant', '寿司以外にもつまみが最高！！'),
(19, '蕎麦処 ほていや', '〒154-0004 東京都世田谷区太子堂２丁目３２−３', 35.647610, 139.672043, 'restaurant', 'ほんといいお店！！おばあちゃん家に来たみたい。常連さんたちも最高'),
(20, 'さぼうる', '〒101-0051 東京都千代田区神田神保町１丁目１１', 35.695553, 139.758514, 'restaurant', 'ナポリタンがおいしい'),
(21, 'BERG ベルク', '〒160-0022 東京都新宿区３丁目３８−１ ルミネエスト B1', 35.691978, 139.700989, 'sake', 'ふらっとビールをのむならここ！！');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
