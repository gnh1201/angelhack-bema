import sys
import time
import libtorrent as lt

# Seed torrent
ses = lt.session()
ses.listen_on(6881, 6891)
h = ses.add_torrent({'ti': lt.torrent_info('bema-bio.torrent'), 'save_path': '.', 'seed_mode': True})
print "Total size: " + str(h.status().total_wanted)
print "Name: " + h.name()
while True:
    s = h.status()
    state_str = ['queued', 'checking', 'downloading metadata', \
      'downloading', 'finished', 'seeding', 'allocating', 'checking fastresume']

    print('\r%.2f%% complete (down: %.1f kb/s up: %.1f kB/s peers: %d) %s' % \
      (s.progress * 100, s.download_rate / 1000, s.upload_rate / 1000, s.num_peers, state_str[s.state]))
    sys.stdout.flush()

    time.sleep(1)
