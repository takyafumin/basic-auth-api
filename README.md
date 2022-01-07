basic認証の検証
====================

basic認証のあるサイトで、ページからのajaxリクエストはbasic認証を通過できるか

環境
----------

* Laravel 8.x


環境情報
----------

### URL

| エンドポイント |             URL             |
| -------------- | --------------------------- 
| 一覧ページ     | http://localhost/posts/     |
| 一覧API        | http://localhost/api/post/ |

### basic認証

サイト全体にbasic認証が設定されている

* アカウント
    - test/test


使い方
----------

```bash
# docker コンテナ起動
make up
```
