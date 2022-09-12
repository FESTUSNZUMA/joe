<div id="nowPlayingBarContainer" class="nowPlayingBarContainer">
	<div class="nowPlayingBar">
		<div class="nowPlayingLeft">
			<div class="content">
				<span class="albumLink">
					<img src="/assets/images/artwork/energy.jpg" class="albumArtwork">
				</span>

				<div class="trackInfo">

					<span class="trackName">
						<span id="trackName"></span>
					</span>

					<span class="artistName">
						<span id="artistName"></span>
					</span>

				</div>



			</div>
		</div>
		<div class="nowPlayingCenter">
			<div class="content playerControls">
				<div class="buttons">
			<button class="controlButton shuffle" title="shufle">
				<img src="/assets/images/icons/shuffle.png" alt="shuffle">
			</button>
			<button class="controlButton previous" title="previous" onclick="prevSong()">
			<img src="/assets/images/icons/previous.png">
			</button>
			<button class="controlButton play" title="play" onclick="playSong()" >
			<img src="/assets/images/icons/play.png">
			</button>
			<button class="controlButton pause" title="pause" style="display: none;" onclick="pauseSong()">
			<img src="/assets/images/icons/pause.png">
			</button>
			<button class="controlButton next" title="next" onclick="nextSong()">
			<img src="/assets/images/icons/next.png">
			</button>
			<button class="controlButton repeat" title="repeat" onclick="repeatSong()">
			<img src="/assets/images/icons/repeat.png">
			</button>
				</div>
				<div class="playbackBar">

					<span class="progressTime current">0.00</span>

					<div class="progressBar">
						<div class="progressBarBg">
							<div class="progress"></div>
						</div>
					</div>

					<span class="progressTime remaining">2.00</span>


				</div>

			</div>
			

	</div>
	<div class="nowPlayingRight">
			<div class="volumeBar">

				<button class="controlButton volume" title="Volume button">
					<img src="assets/images/icons/volume.png" alt="Volume">
				</button>

				<div class="progressBar">
					<div class="progressBarBg">
						<div class="progress"></div>
					</div>
				</div>

			</div>
		</div>
</div>
</div>

