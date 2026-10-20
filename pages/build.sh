#!/usr/bin/env bash
# Builds _site/: projects/*/build -> _site/projects/<project>/ plus a landing page from pages/index.html.
set -euo pipefail
cd "$(dirname "$0")/.."

rm -rf _site
mkdir -p _site/projects
cp -r public _site/img

# order.md lines are "name | «Title» - description" (CRLF-safe), then any project it doesn't list, so nothing silently disappears
order=$( { tr -d '\r' < order.md; echo; ls projects; } | awk -F' [|] ' 'NF && !seen[$1]++' )

shopt -u patsub_replacement 2>/dev/null || true # bash 5.2+: keep "&" in titles literal
card=$(< pages/card.html)
items=""
while IFS= read -r line; do
	name=${line%% | *}
	rest=$name; [[ $line == *" | "* ]] && rest=${line#* | }
	title=${rest%% - *}; desc=""; [[ $rest == *" - "* ]] && desc=${rest#* - }
	dir="projects/$name"
	if [ ! -f "$dir/build/index.html" ]; then
		echo "skip $name: no build/index.html" >&2
		continue
	fi
	cp -r "$dir/build" "_site/projects/$name"
	[ -f "public/$name.jpg" ] || echo "warn $name: no public/$name.jpg" >&2
	html=${card//\{\{name\}\}/$name}; html=${html//\{\{title\}\}/$title}; html=${html//\{\{desc\}\}/$desc}
	items+="$html"$'\n'
done <<< "$order"

ITEMS="$items" awk '/<!-- PROJECTS -->/ { printf "%s", ENVIRON["ITEMS"]; next } { print }' pages/index.html > _site/index.html
grep -q '<li>' _site/index.html || { echo "no projects were published" >&2; exit 1; }