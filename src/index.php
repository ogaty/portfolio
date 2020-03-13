<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <style>
        .lp {
            width: 200px;
        }
        .wrap {
            display: flex;
            margin: 40px;
            flex-wrap: wrap;
        }
        .wrap__child {
            width: 30%;
            text-align: center;
        }
        .caption {
            text-align: center;
            width: 200px;
            margin: 0 auto;
        }
        @media only screen and (max-width: 450px) {
            h1 {
                font-size: 1.1em;
            }
            .description {
                font-size: 0.8rem;
            }
            .wrap__child {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1>LandingPageサンプル集</h1>
    <div class="description">
        適当なテンプレートをHTMLに起こしてみました。<br>
        すべてレスポンシブ対応です。<br>
        <a href="https://github.com/ogaty/portfolio">https://github.com/ogaty/portfolio</a>
    </div>
    <div class="wrap">
        <div class="wrap__child">
            <a href="/1/index.html"><img src="/1/lp1.jpg" alt="1" class="lp"></a><br>
            <div class="caption">
                <a href="/1/index.html">
                    LP 1
                </a>
            </div>
        </div>
        <div class="wrap__child">
            <a href="/2/index.html"><img src="/2/lp2.jpg" alt="1" class="lp"></a><br>
            <div class="caption">
                <a href="/2/index.html">
                    LP 2
                </a>
            </div>
        </div>
    </div>
    <div class="description">
        LP作成、システム作成の依頼は気軽に受け付けております。<br>
        <a href="https://ogatism.jp/biz">詳細はこちらまで。</a>
    </div>
</body>
</html>