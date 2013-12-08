DEBUGKIT.Util.Cookie = function () {
	var cookieLife = 60;

// Public methods
	return {
		/**
		 * Write to cookie.
		 *
		 * @param [string] name Name of cookie to write.
		 * @param [mixed] value Value to write to cookie.
		 */
		write: function (name, value) {
			var date = new Date();
			date.setTime(date.getTime() + (cookieLife * 24 * 60 * 60 * 1000));
			var expires = '; expires=' + date.toGMTString();
			document.cookie = name + '=' + value + expires + '; path=/';
			return true;
		},

		/**
		 * Read from the cookie.
		 *
		 * @param [string] name Name of cookie to read.
		 */
		read: function (name) {
			name = name + '=';
			var cookieJar = document.cookie.split(';');
			var cookieJarLength = cookieJar.length;
			for (var i = 0; i < cookieJarLength; i++) {
				var chips = cookieJar[i];
				// Trim leading spaces
				while (chips.charAt(0) === ' ') {
					chips = chips.substring(1, chips.length);
				}
				if (chips.indexOf(name) === 0) {
					return chips.substring(name.length, chips.length);
				}
			}
			return false;
		},

		/**
		 * Delete a cookie by name.
		 *
		 * @param [string] name of cookie to delete.
		 */
		del: function (name) {
			var date = new Date();
			date.setFullYear(2000, 0, 1);
			var expires = ' ; expires=' + date.toGMTString();
			document.cookie = name + '=' + expires + '; path=/';
		}
	};
}();