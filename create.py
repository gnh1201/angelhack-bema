import sys
import time
import libtorrent as lt

# Create torrent
fs = lt.file_storage()
lt.add_files(fs, "./bema-bio.json")
t = lt.create_torrent(fs)

trackerList = [
    'udp://tracker.istole.it:80/announce',
    'udp://tracker.ccc.de:80/announce',
    'http://tracker.torrentbay.to:6969/announce',
    'udp://fr33domtracker.h33t.com:3310/announce',
    'udp://tracker.publicbt.com:80/announce',
    'udp://tracker.openbittorrent.com:80/announce',
    'udp://11.rarbg.com/announce'
    'udp://tracker.istole.it:80/announce'
]

for tracker in trackerList:
    t.add_tracker(tracker, 0)

t.set_creator('libtorrent %s' % lt.version)
t.set_comment("AngelHack Hackathon Seoul 2019: Team BEMA")
lt.set_piece_hashes(t, ".")
torrent = t.generate()
f = open("bema-bio.torrent", "wb")
f.write(lt.bencode(torrent))
f.close()
