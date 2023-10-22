<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
    .video-container {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
    }
    .video-container video {
        width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: black;
    }
    .video-container:-webkit-full-screen video {
        border-radius: 0;
    }
    .video-container:-ms-fullscreen video {
        border-radius: 0;
    }
    .video-container:fullscreen video {
        border-radius: 0;
    }
    .video-container .controls {
        position: absolute;
        bottom: 10px;
        left: 10px;
        right: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.6);
        border-radius: 8px;
        padding: 8px;
        box-sizing: border-box;
        -webkit-backdrop-filter: blur(5px);
        backdrop-filter: blur(5px);
        font-family: "Raleway", sans-serif;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .video-container .controls .progress-bar-container {
        position: relative;
        flex: 1;
        height: 5px;
        margin-right: 10px;
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 3px;
        cursor: pointer;
        overflow: hidden;
        transition: height 0.2s ease-in-out;
    }
    .video-container .controls .progress-bar-container:hover {
        height: 10px;
    }
    .video-container .controls .progress-bar-container .buffered-amount-bar {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.5);
    }
    .video-container .controls .progress-bar-container .current-progress-bar {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        background-color: #27c5ed;
    }
    .video-container .controls .toggle-play-pause {
        background: none;
        border: none;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
    }
    .video-container .controls .toggle-chromecast {
        display: none;
    }
    .video-container .controls .timestamp {
        color: #fff;
        font-size: 12px;
        padding: 0 10px;
    }
    .video-container .controls .toggle-volume,
    .video-container .controls .toggle-airplay,
    .video-container .controls .toggle-chromecast,
    .video-container .controls .toggle-picture-in-picture,
    .video-container .controls .toggle-fullscreen {
        background: none;
        border: none;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        text-fill-color: #000;
        transition: color 0.1s ease-in-out;
    }
    .video-container .controls .toggle-volume.toggle-fullscreen,
    .video-container .controls .toggle-airplay.toggle-fullscreen,
    .video-container .controls .toggle-chromecast.toggle-fullscreen,
    .video-container .controls .toggle-picture-in-picture.toggle-fullscreen,
    .video-container .controls .toggle-fullscreen.toggle-fullscreen {
        font-size: 20px;
        padding: 2px 4px 3px 4px;
    }
    .video-container .controls .toggle-volume:hover,
    .video-container .controls .toggle-airplay:hover,
    .video-container .controls .toggle-chromecast:hover,
    .video-container .controls .toggle-picture-in-picture:hover,
    .video-container .controls .toggle-fullscreen:hover {
        color: #27c5ed;
    }
    .video-container .controls .volume-container {
        height: 100%;
        position: relative;
    }
    .video-container .controls .volume-container .volume-slider {
        width: 32px;
        height: 120px;
        background: rgba(0, 0, 0, 0.6);
        -webkit-backdrop-filter: blur(5px);
        backdrop-filter: blur(5px);
        border-radius: 8px;
        text-align: center;
        position: absolute;
        color: #866a62;
        top: -135px;
        left: -2px;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
    }
    .video-container .controls .volume-container .volume-slider .drag-line {
        width: 5px;
        height: 100px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 8px;
        margin: 10px auto;
        position: relative;
    }
    .video-container .controls .volume-container .volume-slider .line {
        width: 5px;
        height: 100px;
        background: #27c5ed;
        border-radius: 8px;
        margin: 0 auto;
        position: absolute;
        clip: rect(0px, 8px, 183px, 0px);
        bottom: 0;
    }
    .video-container .controls .volume-container .volume-slider.show-slider {
        opacity: 1;
        visibility: visible;
        cursor: pointer;
    }
</style>


<figure class="video-container">
    <video preload="metadata" poster="https://camendesign.com/code/video_for_everybody/poster.jpg">
        <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
        <p>Your browser does not support HTML5 video.</p>
    </video>

    <div class="controls">
        <button class='toggle-play-pause material-icons'>play_arrow</button>

        <div class="timestamp">Loading...</div>

        <div class="progress-bar-container">
            <div class="buffered-amount-bar"></div>
            <div class="current-progress-bar"></div>
        </div>

        <div class="volume-container">
            <button class="toggle-volume material-icons">volume_up</button>
            <div class="volume-slider">
                <div class="drag-line">
                    <div class="line"></div>
                </div>
            </div>
        </div>

        <button class="toggle-airplay material-icons">airplay</button>
        <button class="toggle-chromecast material-icons">cast</button>
        <button class="toggle-picture-in-picture material-icons">picture_in_picture</button>
        <button class="toggle-fullscreen material-icons">fullscreen</button>
    </div>
</figure>

<script src="https://www.gstatic.com/cv/js/sender/v1/cast_sender.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const videoContainers = document.querySelectorAll(".video-container");

        videoContainers.forEach((videoContainer) => {
            const video = videoContainer.querySelector("video");
            const timestamp = videoContainer.querySelector(".timestamp");
            const playPauseBtn = videoContainer.querySelector(".toggle-play-pause");
            const fullscreenBtn = videoContainer.querySelector(".toggle-fullscreen");
            const pictureInPictureBtn = videoContainer.querySelector(
                ".toggle-picture-in-picture"
            );
            const airplayBtn = videoContainer.querySelector(".toggle-airplay");
            const chromecastBtn = videoContainer.querySelector(".toggle-chromecast");
            const bufferedBar = videoContainer.querySelector(".buffered-amount-bar");
            const progressBar = videoContainer.querySelector(".current-progress-bar");
            const progressContainer = videoContainer.querySelector(
                ".progress-bar-container"
            );
            const volumeContainer = videoContainer.querySelector(".volume-container");
            const volumeSlider = volumeContainer.querySelector(".volume-slider");
            const volumeLine = volumeSlider.querySelector(".line");
            const toggleVolumeBtn = volumeContainer.querySelector(".toggle-volume");

            let isDragging = false;
            let isDraggingVolume = false;

            video.addEventListener("loadedmetadata", () =>
                updateTimestamp(video, timestamp)
            );
            video.addEventListener("timeupdate", () => {
                updateProgressBar(video, progressBar);
                updateTimestamp(video, timestamp);
            });
            video.addEventListener("progress", () =>
                updateBufferedBar(video, bufferedBar)
            );

            progressContainer.addEventListener("mousedown", () => (isDragging = true));
            progressContainer.addEventListener("mouseup", () => (isDragging = false));
            progressContainer.addEventListener("mousemove", (event) =>
                setVideoTime(video, progressContainer, progressBar, event, isDragging)
            );
            progressContainer.addEventListener("click", (event) =>
                setVideoTime(video, progressContainer, progressBar, event, isDragging)
            );

            playPauseBtn.addEventListener("click", () =>
                togglePlayPause(video, playPauseBtn)
            );
            video.addEventListener("click", () => togglePlayPause(video, playPauseBtn));

            volumeSlider.addEventListener("mousedown", () => (isDraggingVolume = true));
            document.addEventListener("mouseup", () => (isDraggingVolume = false));
            document.addEventListener("mousemove", (event) => {
                if (isDraggingVolume) {
                    updateVolume(video, volumeSlider, volumeLine, event);
                }
            });
            volumeSlider.addEventListener("click", (event) =>
                updateVolume(video, volumeSlider, volumeLine, event)
            );

            toggleVolumeBtn.addEventListener("click", () =>
                toggleVolume(video, toggleVolumeBtn)
            );

            let sliderTimer;

            volumeContainer.addEventListener("mouseenter", () => {
                clearTimeout(sliderTimer);
                volumeSlider.classList.add("show-slider");
            });

            volumeContainer.addEventListener("mouseleave", () => {
                if (!isDraggingVolume) {
                    sliderTimer = setTimeout(() => {
                        volumeSlider.classList.remove("show-slider");
                    }, 300);
                }
            });

            document.addEventListener("mouseup", () => {
                isDraggingVolume = false;

                if (!isMouseOverVolumeSlider(volumeSlider)) {
                    sliderTimer = setTimeout(() => {
                        volumeSlider.classList.remove("show-slider");
                    }, 300);
                }
            });

            function isMouseOverVolumeSlider(volumeSlider) {
                const rect = volumeSlider.getBoundingClientRect();
                return (
                    rect.top <= window.event.clientY &&
                    window.event.clientY <= rect.bottom &&
                    rect.left <= window.event.clientX &&
                    window.event.clientX <= rect.right
                );
            }

            // Check for Picture-in-Picture support
            if (document.pictureInPictureEnabled) {
                pictureInPictureBtn.style.display = "block"; // Show button
                pictureInPictureBtn.addEventListener("click", () =>
                    togglePictureInPicture(video)
                );
            } else {
                pictureInPictureBtn.style.display = "none"; // Hide button
            }

            // Check for Fullscreen support
            if (document.fullscreenEnabled || document.webkitFullscreenEnabled) {
                fullscreenBtn.style.display = "block"; // Show button
                fullscreenBtn.addEventListener("click", () =>
                    toggleFullScreen(videoContainer)
                );
            } else {
                fullscreenBtn.style.display = "none"; // Hide button
            }

            // Check for AirPlay support
            if (window.WebKitPlaybackTargetAvailabilityEvent) {
                airplayBtn.style.display = "block"; // Show button
                airplayBtn.addEventListener("click", () => handleAirPlay(video));
            } else {
                airplayBtn.style.display = "none"; // Hide button
            }

            // Handle Chromecast Initialization
            handleChromecastInitialization(chromecastBtn);
        });

        function togglePlayPause(video, playPauseBtn) {
            if (video.paused) {
                video.play();
                playPauseBtn.textContent = "pause";
            } else {
                video.pause();
                playPauseBtn.textContent = "play_arrow";
            }
        }

        function togglePictureInPicture(video) {
            if (!document.pictureInPictureElement) {
                video.requestPictureInPicture();
            } else {
                document.exitPictureInPicture();
            }
        }

        function toggleFullScreen(videoContainer) {
            if (!document.fullscreenElement) {
                videoContainer.requestFullscreen();
            } else {
                document.exitFullscreen();
            }
        }

        function updateVolume(video, volumeSlider, volumeLine, event) {
            const sliderBounds = volumeSlider.getBoundingClientRect();
            const mouseYRelativeToSlider = sliderBounds.bottom - event.clientY;
            const threshold = 5;
            let sliderPosition;

            if (mouseYRelativeToSlider < threshold) {
                sliderPosition = 0;
            } else if (mouseYRelativeToSlider > sliderBounds.height - threshold) {
                sliderPosition = sliderBounds.height;
            } else {
                sliderPosition = mouseYRelativeToSlider;
            }

            const volume = sliderPosition / sliderBounds.height;
            video.volume = volume;
            volumeLine.style.height = volume * 100 + "%";
        }

        function toggleVolume(video, toggleVolumeBtn) {
            if (video.muted) {
                video.muted = false;
                toggleVolumeBtn.textContent = "volume_up";
            } else {
                video.muted = true;
                toggleVolumeBtn.textContent = "volume_off";
            }
        }

        function updateProgressBar(video, progressBar) {
            const percentage = (video.currentTime / video.duration) * 100;
            progressBar.style.width = percentage + "%";
        }

        function updateBufferedBar(video, bufferedBar) {
            if (video.buffered.length > 0) {
                const bufferedEnd = video.buffered.end(video.buffered.length - 1);
                const percentage = (bufferedEnd / video.duration) * 100;
                bufferedBar.style.width = percentage + "%";
            }
        }

        function setVideoTime(
            video,
            progressContainer,
            progressBar,
            event,
            isDragging
        ) {
            if (isDragging || event.type === "click") {
                const offsetX =
                    event.clientX - progressContainer.getBoundingClientRect().left;
                const percentage = offsetX / progressContainer.offsetWidth;
                video.currentTime = percentage * video.duration;
                progressBar.style.width = percentage * 100 + "%";
            }
        }

        function updateTimestamp(video, timestamp) {
            const formattedCurrentTime = formatTime(video.currentTime);
            const formattedDuration = formatTime(
                Math.round(video.duration - video.currentTime)
            );
            timestamp.textContent = `${formattedCurrentTime} / ${formattedDuration}`;
        }

        function formatTime(timeInSeconds) {
            const hours = Math.floor(timeInSeconds / 3600);
            const minutes = Math.floor((timeInSeconds % 3600) / 60);
            const seconds = Math.floor(timeInSeconds % 60);
            const formattedMinutes = minutes.toString().padStart(2, "0");
            const formattedSeconds = seconds.toString().padStart(2, "0");

            if (hours > 0) {
                const formattedHours = hours.toString().padStart(2, "0");
                return `${formattedHours}:${formattedMinutes}:${formattedSeconds}`;
            }
            return `${formattedMinutes}:${formattedSeconds}`;
        }

        function handleAirPlay(video) {
            if (window.WebKitPlaybackTargetAvailabilityEvent) {
                video.addEventListener(
                    "webkitplaybacktargetavailabilitychanged",
                    (event) => {
                        if (event.availability === "available") {
                            video.webkitShowPlaybackTargetPicker();
                        }
                    }
                );
            } else {
                alert("AirPlay is not supported in this browser.");
            }
        }

        function handleChromecastInitialization(chromecastBtn) {
            try {
                if (!chrome.cast || !chrome.cast.isAvailable) {
                    console.log("Attempting to initialize Chromecast API...");
                    setTimeout(() => initializeCastApi(chromecastBtn), 1000);
                } else {
                    console.log("Chromecast API is available.");
                    initializeCastApi(chromecastBtn);
                }
            } catch (e) {
                console.error("Chromecast API is not supported in this browser.");
            }
        }

        function initializeCastApi(chromecastBtn) {
            try {
                const sessionRequest = new chrome.cast.SessionRequest(
                    chrome.cast.media.DEFAULT_MEDIA_RECEIVER_APP_ID
                );
                const apiConfig = new chrome.cast.ApiConfig(
                    sessionRequest,
                    () => {},
                    (availability) => receiverListener(availability)
                );

                chrome.cast.initialize(
                    apiConfig,
                    () => {
                        console.log("Chromecast API successfully initialized.");
                        // If the API is initialized, display the Chromecast button
                        chromecastBtn.style.display = "block";

                        // Add the event listener to the Chromecast button
                        chromecastBtn.addEventListener("click", () =>
                            requestChromecastSession(sessionRequest)
                        );
                    },
                    console.error
                );
            } catch (e) {
                console.error("Failed to initialize Chromecast API:", e);
            }
        }

        function receiverListener(availability) {
            if (availability === chrome.cast.ReceiverAvailability.AVAILABLE) {
                console.log("Chromecast receiver available.");
            } else {
                console.log("Chromecast receiver not available.");
            }
        }

        function requestChromecastSession(sessionRequest, video) {
            if (!sessionRequest) return;
            chrome.cast.requestSession((session) => {
                const videoSrc = video.currentSrc;
                const videoType = video.type;
                const mediaInfo = new chrome.cast.media.MediaInfo(videoSrc, videoType);
                const request = new chrome.cast.media.LoadRequest(mediaInfo);
                session.loadMedia(request, () => {}, console.error);
            }, console.error);
        }
    });

</script>