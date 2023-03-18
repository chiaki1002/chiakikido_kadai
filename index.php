<?php

$list = [
  ["group"=>"オセアニア","list"=>[
                          ["name"=>"オーストラリア","description"=>"手つかずの大自然が広がるオーストラリア。世界最大の珊瑚礁であるグレートバリアリーフや、巨大なエアーズロックは世界遺産に登録されています。","url"=>"https://ja.wikipedia.org/wiki/%E3%82%AA%E3%83%BC%E3%82%B9%E3%83%88%E3%83%A9%E3%83%AA%E3%82%A2"],
                          ["name"=>"ニュージーランド","description"=>"とびきり美しい大自然とフレンドリーな人々に出会える国、ニュージーランド。","url"=>"https://ja.wikipedia.org/wiki/%E3%83%8B%E3%83%A5%E3%83%BC%E3%82%B8%E3%83%BC%E3%83%A9%E3%83%B3%E3%83%89"],
                          ["name"=>"フィジー","description"=>"南太平洋に浮かぶ小さな島国フィジー共和国。短い旅行日数でも行ける南太平洋のビーチリゾートとして、近年じわじわと人気上昇中","url"=>"https://ja.wikipedia.org/wiki/%E3%83%95%E3%82%A3%E3%82%B8%E3%83%BC#%E5%9B%BD%E5%90%8D"]
                        ]
  ],
  ["group"=>"アジア","list"=>[
                          ["name"=>"韓国","description"=>"飛行機で2時間程度で行ける韓国は、グルメ、ショッピングが楽しい、気軽に行ける海外として人気の観光地","url"=>"https://ja.wikipedia.org/wiki/%E5%A4%A7%E9%9F%93%E6%B0%91%E5%9B%BD"],
                          ["name"=>"中国","description"=>"中国には世界最大の数と多様な観光名所があります","url"=>"https://ja.wikipedia.org/wiki/%E4%B8%AD%E5%9B%BD"],
                          ["name"=>"フィリピン","description"=>"太平洋に浮かぶ、大小7000を超える個性的な島々からなる人気観光地","url"=>"https://ja.wikipedia.org/wiki/%E3%83%95%E3%82%A3%E3%83%AA%E3%83%94%E3%83%B3"]
                        ]
  ],
  ["group"=>"ヨーロッパ","list"=>[
                          ["name"=>"スペイン","description"=>"情熱の国と呼ばれるスペイン。","url"=>"https://ja.wikipedia.org/wiki/%E3%82%B9%E3%83%9A%E3%82%A4%E3%83%B3"],
                          ["name"=>"フランス","description"=>"観光名所が盛り沢山のフランス","url"=>"https://ja.wikipedia.org/wiki/%E3%83%95%E3%83%A9%E3%83%B3%E3%82%B9"],
                          ["name"=>"ドイツ","description"=>"ドイツには、中世からたたずむ古城をはじめゴシック様式やロココ様式の美麗な建築物など、一生に一度は観光したい名所がたくさんあります。","url"=>"https://ja.wikipedia.org/wiki/%E3%83%89%E3%82%A4%E3%83%84"]
                        ]
  ],
  ["group"=>"その他","list"=>[
                          ["name"=>"アメリカ","description"=>"ニューヨークやラスベガス、ロサンゼルスなど多くの有名観光スポットがあり、都市によって雰囲気が異なる","url"=>"https://ja.wikipedia.org/wiki/%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB%E5%90%88%E8%A1%86%E5%9B%BDl"],
                          ["name"=>"メキシコ","description"=>"世界遺産保有数が世界で第6位","url"=>"https://ja.wikipedia.org/wiki/%E3%83%A1%E3%82%AD%E3%82%B7%E3%82%B3"],
                          ["name"=>"カナダ","description"=>"春には花の街ビクトリアを散策し、夏にはカナディアンロッキーで山と森と湖が鮮やかなコントラストを感じる、秋には美しく色づくメープル街道へ、冬はイエローナイフでオーロラ鑑賞。カナダには季節によっていろいろな楽しみ方があります。","url"=>"https://ja.wikipedia.org/wiki/%E3%82%AB%E3%83%8A%E3%83%80"]
                        ]
  ]
];

?>

<!DOCTYPE html>
<html>
<head>
  <title>おすすめ旅行先</title>
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
  <?php foreach ($list as $item) { ?>
    <h2 class="food_title"><?php echo $item["group"]; ?></h2>
    <ul>
      <?php $i = 0; ?>
      <?php foreach ($item["list"] as $foodList) { ?>
        <?php $i++; ?>
        <li>
        <h3 class="food_title type<?php echo $i; ?>">
          <a href="<?php echo $foodList["url"]; ?>" target="_blank">
            <?php echo $foodList["name"]; ?>
          </a>
        </h3>
        <div><?php echo $foodList["description"]; ?></div>
      </li>
      <?php } ?>
    </ul>

  <?php } ?>

</body>
</html>