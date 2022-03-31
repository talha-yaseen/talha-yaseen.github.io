from difflib import SequenceMatcher

def similar(a, b):
    return SequenceMatcher(None, a, b).ratio()

f = open('My Clippings.txt')
title = f.readline()
highlights = {}
while title:
    info = f.readline()
    f.readline()
    highlight = f.readline()
    if title in highlights.keys():
        # Check if the previous highlight is similar
        previous = highlights[title][-1]
        if similar(previous, highlight) > 0.5:
            highlights[title].pop()
        highlights[title].append(highlight)
    else:
        highlights[title] = []
        highlights[title].append(highlight)
    f.readline()
    title = f.readline()
f.close()
fo = open('highlights.html', 'w')
fo.write('<html><head><title>My Highlights</title>')
fo.write('<meta name="viewport" content="width=device-width, initial-scale=1.0" />')
fo.write('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />')
fo.write('<style>li {margin-bottom: 1em;}</style></head>')
fo.write('<body><h1>My Highlights</h1><hr />')

for title, h_list in highlights.items():
    fo.write('<h2>' + title + '</h2>')
    fo.write('<ul>')
    for line in h_list:
        if line.strip() != '':
            fo.write('<li>' + line + '</li>')
    fo.write('</ul>')
    fo.write('<hr />')
fo.write('<h3>Last Highlight: ' + info.split('|')[-1].strip() + '</h3>')
fo.write('<h3>Total Title Count: ' + str(len(highlights.keys())) + '</h3>')
fo.write('</body></html>')
fo.close()

