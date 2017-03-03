// html5media enables <video> and <audio> tags in all major browsers
// External File: http://api.html5media.info/1.1.8/html5media.min.js


// Add user agent as an attribute on the <html> tag...
// Inspiration: http://css-tricks.com/ie-10-specific-styles/
var b = document.documentElement;
b.setAttribute('data-useragent', navigator.userAgent);
b.setAttribute('data-platform', navigator.platform);


// HTML5 audio player + playlist controls...
// Inspiration: http://jonhall.info/how_to/create_a_playlist_for_html5_audio
// Mythium Archive: https://archive.org/details/mythium/
jQuery(function ($) {
    var supportsAudio = !!document.createElement('audio').canPlayType;
    if (supportsAudio) {
        var index = 0,
            playing = false,
            mediaPath = '../application/views/meditation/',
            extension = '',
            tracks = [{
                "track": 1,
                "name": "1 Minute Calming Meditation",
                "length": "1:28",
                "file": "1MinuteCalmingMeditation"
            }, {
                "track": 2,
                "name": "2 Minute Inner Peace Meditation",
                "length": "2:28",
                "file": "2 Minute Inner Peace Meditation"
            }, {
                "track": 3,
                "name": "2 Minute Stress Release Meditation",
                "length": "2:27",
                "file": "2 Minute Stress Release Meditation"
            }, {
                "track": 4,
                "name": "10 min Breathing for Stress Reduction and Wellbeing",
                "length": "11:24",
                "file": "10 min Breathing for Stress Reduction and Wellbeing"
            }, {
                "track": 5,
                "name": "Accessing Your Intuition",
                "length": "12:13",
                "file": "Accessing Your Intuition"
            }, {
                "track": 6,
                "name": "Breathing Calmness Guided Meditation",
                "length": "9:52",
                "file": "Breathing Calmness Guided Meditation"
            }, {
                "track": 7,
                "name": "Bringing About What You Desire Meditation",
                "length": "9:23",
                "file": "Bringing About What You Desire Meditation"
            }, {
                "track": 8,
                "name": "Creating Your Meditation Sanctuary",
                "length": "12:48",
                "file": "Creating Your Meditation Sanctuary"
            }, {
                "track": 9,
                "name": "Deep Healing _ Relaxation Meditation",
                "length": "14:39",
                "file": "Deep Healing _ Relaxation Meditation"
            }, {
                "track": 10,
                "name": "Deep Relaxation Meditation",
                "length": "12:20",
                "file": "Deep Relaxation Meditation"
            }, {
                "track": 11,
                "name": "Enhance Your Self Esteem Meditation",
                "length": "18:17",
                "file": "Enhance Your Self Esteem Meditation"
            }, {
                "track": 12,
                "name": "Gratitude",
                "length": "16:06",
                "file": "Gratitude"
            }, {
                "track": 13,
                "name": "Guided Awareness for Obsessive Thoughts",
                "length": "11:23",
                "file": "Guided Awareness for Obsessive Thoughts"
            }, {
                "track": 14,
                "name": "Guided Heart Meditation for Couples",
                "length": "8:35",
                "file": "Guided Heart Meditation for Couples"
            }, {
                "track": 15,
                "name": "Guided Meditation for Anger",
                "length": "13:16",
                "file": "Guided Meditation for Anger"
            }, {
                "track": 16,
                "name": "Guided Meditation for Travel",
                "length": "20:13",
                "file": "Guided Meditation for Travel"
            }, {
                "track": 17,
                "name": "Guided Relaxation for Work or Home",
                "length": "16:02",
                "file": "Guided Relaxation for Work or Home"
            }, {
                "track": 18,
                "name": "Guided Visualization for a Relationship Breakup",
                "length": "13:38",
                "file": "Guided Visualization for a Relationship Breakup"
            }, {
                "track": 19,
                "name": "Guided Visualization for Deep Sleep",
                "length": "9:013",
                "file": "Guided Visualization for Deep Sleep"
            }, {
                "track": 20,
                "name": "Guided Visualization for Public Speaking",
                "length": "11:05",
                "file": "Guided Visualization for Public Speaking"
            }, {
                "track": 21,
                "name": "Guided Visualization for Social Anxiety",
                "length": "14:52",
                "file": "Guided Visualization for Social Anxiety"
            }, {
                "track": 22,
                "name": "Heart Rhythm Harmony _ Healing Meditation",
                "length": "7:22",
                "file": "Heart Rhythm Harmony _ Healing Meditation"
            }, {
                "track": 23,
                "name": "Holding Yourself in Love",
                "length": "5:37",
                "file": "Holding Yourself in Love"
            }, {
                "track": 24,
                "name": "Letting Go of a Negative Memory",
                "length": "9:13",
                "file": "Letting Go of a Negative Memory"
            }, {
                "track": 25,
                "name": "Letting Go of an Obsessive Thought",
                "length": "7:41",
                "file": "Letting Go of an Obsessive Thought"
            }, {
                "track": 26,
                "name": "Loving Kindness Guided Meditation",
                "length": "10:48",
                "file": "Loving Kindness Guided Meditation"
            }, {
                "track": 27,
                "name": "Loving Self Compassion",
                "length": "10:15",
                "file": "Loving Self Compassion"
            }, {
                "track": 28,
                "name": "Moving Beyond Negative Thinking_ Lift, Open and Embrace",
                "length": "9:31",
                "file": "Moving Beyond Negative Thinking_ Lift, Open and Embrace"
            }, {
                "track": 29,
                "name": "Opening Your Heart to Love Meditation",
                "length": "10:46",
                "file": "Opening Your Heart to Love Meditation"
            }, {
                "track": 30,
                "name": "Peace, Love and Compassion Meditation",
                "length": "14:23",
                "file": "Peace, Love and Compassion Meditation"
            }, {
                "track": 31,
                "name": "Releasing Muscular Tension Meditation",
                "length": "20:33",
                "file": "Releasing Muscular Tension Meditation"
            }, {
                "track": 32,
                "name": "Stress Reduction",
                "length": "20:24",
                "file": "Stress Reduction"
            }, {
                "track": 33,
                "name": "Transformative Smile Guided Meditation",
                "length": "17:38",
                "file": "Transformative Smile Guided Meditation"
            }, {
                "track": 34,
                "name": "Transforming Loneliness with the Light of Your Smile",
                "length": "11:13",
                "file": "Transforming Loneliness with the Light of Your Smile"
            }, {
                "track": 35,
                "name": "Walking Meditation - Indoors",
                "length": "14:25",
                "file": "Walking Meditation - Indoors"
            }, {
                "track": 36,
                "name": "Walking Meditation - Outdoors",
                "length": "15:34",
                "file": "Walking Meditation - Outdoors"
            }, {
                "track": 37,
                "name": "Washing Away Negativity",
                "length": "6:27",
                "file": "Washing Away Negativity"
            }],
            buildPlaylist = $.each(tracks, function(key, value) {
                var trackNumber = value.track,
                    trackName = value.name,
                    trackLength = value.length;
                if (trackNumber.toString().length === 1) {
                    trackNumber = '0' + trackNumber;
                } else {
                    trackNumber = '' + trackNumber;
                }
                $('#plList').append('<li><div class="plItem"><div class="plNum">' + trackNumber + '.</div><div class="plTitle">' + trackName + '</div><div class="plLength">' + trackLength + '</div></div></li>');
            }),
            trackCount = tracks.length,
            npAction = $('#npAction'),
            npTitle = $('#npTitle'),
            audio = $('#audio1').bind('play', function () {
                playing = true;
                npAction.text('Now Playing...');
            }).bind('pause', function () {
                playing = false;
                npAction.text('Paused...');
            }).bind('ended', function () {
                npAction.text('Paused...');
                if ((index + 1) < trackCount) {
                    index++;
                    loadTrack(index);
                    audio.play();
                } else {
                    audio.pause();
                    index = 0;
                    loadTrack(index);
                }
            }).get(0),
            btnPrev = $('#btnPrev').click(function () {
                if ((index - 1) > -1) {
                    index--;
                    loadTrack(index);
                    if (playing) {
                        audio.play();
                    }
                } else {
                    audio.pause();
                    index = 0;
                    loadTrack(index);
                }
            }),
            btnNext = $('#btnNext').click(function () {
                if ((index + 1) < trackCount) {
                    index++;
                    loadTrack(index);
                    if (playing) {
                        audio.play();
                    }
                } else {
                    audio.pause();
                    index = 0;
                    loadTrack(index);
                }
            }),
            li = $('#plList li').click(function () {
                var id = parseInt($(this).index());
                if (id !== index) {
                    playTrack(id);
                }
            }),
            loadTrack = function (id) {
                $('.plSel').removeClass('plSel');
                $('#plList li:eq(' + id + ')').addClass('plSel');
                npTitle.text(tracks[id].name);
                index = id;
                audio.src = mediaPath + tracks[id].file + extension;
            },
            playTrack = function (id) {
                loadTrack(id);
                audio.play();
            };
        extension = audio.canPlayType('audio/mpeg') ? '.mp3' : '';
        loadTrack(index);
    }
});