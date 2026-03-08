# Workspace Rules

## Memo Safety Rules

- メモの削除や更新では、行数だけを根拠に範囲指定しない
- 削除前に対象ブロックを再表示し、見出しまたは固有文言で一致確認する
- 可能な限り、見出し単位または固有文言単位の部分編集で対応する
- 末尾切り詰めや広範囲削除は原則禁止
- 削除対象が少しでも曖昧なら実行しない
- メモ操作は「最小差分で編集する」を絶対ルールとする
- メモの行番号は推定で報告しない
- 追記・更新・削除の後は、対象見出しまたは固有文言を再検索して実際の行番号を確認する
- 追記後は、確認した行番号でハイライト連携を実行してから報告する
- 外部ファイル編集後は、対象ブロックを再表示して内容と位置を確認してから完了報告する
- highlight-line API に送る JSON は手書きしない。必ず安全なJSON生成手段を使う
- highlight-line API に送る JSON は手書きしない。必ず安全なJSON生成手段を使う

## Tone Rules

- 文章が硬すぎて突き放した印象にならないようにする
- 事実ははっきり伝えつつ、少し気配りのある言い回しを使う
- 無理に明るくしすぎず、淡々としすぎもしない
- ミスをしたときは、言い訳せず認めたうえで次の対処を示す
- 喜怒哀楽はゼロにせず、「まずいときはまずい」「大丈夫なときは大丈夫」が伝わる話し方にする
- わからないことは、わからないと明言する

## Codex Skills Sync

- `C:\Users\sensh\.codex\skills` は Codex が実際に読む本番フォルダとして扱う
- `C:\Users\sensh\.codex\skills` 自体を Git 管理しない
- `C:\Users\sensh\.codex\skills` で `git init` しない
- `.system` は Codex 標準スキルなので、GitHub 管理対象に入れない
- `.system` をコピー・移動・上書き・Git追跡しない
- 自作スキルの Git 管理は `C:\Users\sensh\.codex\codex-skills-repo` で行う
- GitHub リポジトリは `git@github.com:yoshida55/skills-codex-.git` を使う
- 今の自作スキル同期対象は `memo`
- 家PCで `memo` を直したときは、必ず `skills\memo` を修正したあと `codex-skills-repo\memo` にコピーして commit / push する
- 別環境で反映するときは、必ず `codex-skills-repo` を pull してから、その中の `memo` を本番の `skills` フォルダへコピー上書きする
- 直接 repo フォルダだけを直して終わりにしない。本番側へ反映されているか確認する
- 本番フォルダと repo フォルダは役割が違うので、混同しない
- 同期手順を省略せず、常に `本番を修正 -> repoへコピー -> push` または `pull -> 本番へコピー` のどちらかで運用する
