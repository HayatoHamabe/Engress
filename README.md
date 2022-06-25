# ご挨拶

お忙しい中、ご覧いただきありがとうございます。
工夫した点・wordpress を使用した点を書いておりますので、ご参考にしていただけましたら幸いです。

# 工夫した点

- <h1>タグは、トップページではロゴに使い、それ以外では記事タイトルに使用した
  - こちらの方がSEO的に有利。
  - [参考記事](https://manablog.org/internal-seo/#:~:text=SEO%E5%86%85%E9%83%A8%E5%AF%BE%E7%AD%96%E3%81%AE%E6%8E%9F10%EF%BC%8Eh1%E3%81%AF%E5%8B%95%E7%9A%84%E3%81%AB%E5%A4%89%E6%9B%B4%E3%81%99%E3%82%8B%E3%81%93%E3%81%A8)
- jQuery は使用せず、javaScript のみで実装した
  - こちらの方が読み込みが早く、検索で上位に表示されやすくなる。

# wordpress 化した点

- トップ
  - 「TOEFL 成功事例」の各ユーザー情報はカスタム投稿タイプにカスタムフィールドを使用し、クライアントが簡単に情報を書き換えることができ、かつデザインが崩れないようにした
  - ブログリストは「投稿」を使用
- その他
  - ヘッダー・フッターのコンポーネント化

# メモ

- ACF 関数が Intelephense に認識されず、動作はするが undefind 扱いされるとき
  - [参考記事](https://marioyepes.com/intelephense-wordpress-acf-genesis-conf/)
  - [composer が実行できない時の参考記事](https://code-graffiti.com/install-comporser-on-mac/)
