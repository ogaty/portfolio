<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <style>
        body {
            margin: 0;
        }
        h1 {
            margin: 0 0 20px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px 8px 10px;
            background: #efefef;
        }
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
        .footer {
            text-align: center;
            margin: 120px 0 20px;
        }
        @media only screen and (max-width: 450px) {
            h1 {
                font-size: 1.1em;
            }
            .container {
                width: 100%;
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
    <div class="container">
        <h1>Portfolio</h1>
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
            <div class="wrap__child">
                <a href="/3/index.html"><img src="/3/lp3.jpg" alt="1" class="lp"></a><br>
                <div class="caption">
                    <a href="/3/index.html">
                        LP 3
                    </a>
                </div>
            </div>
        </div>
        <div class="description">
            LP作成、システム作成の依頼は気軽に受け付けております。<br>
            <a href="https://ogatism.jp/fixed/biz">詳細はこちらまで。</a>
        </div>
        <footer>
            <div class="footer">
                (c) ogatism 2020.
            </div>
        </footer>
    </div>
</body>
</html>
