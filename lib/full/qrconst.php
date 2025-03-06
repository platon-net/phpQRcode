<?php

class QRconst
{
	/* ----------------------------------------------------
	 * qrconfig.php
	 */

	public const QR_CACHEABLE = false;

	/** Cache dir path.
	 __String__ Used when QR_CACHEABLE === true. Specifies absolute server path
	for masks and format templates cache dir  */
	public const QR_CACHE_DIR = __DIR__.DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR;

	/** Default error logs dir.
	 __String__ Absolute server path for log directory. */
	public const QR_LOG_DIR = __DIR__.DIRECTORY_SEPARATOR;

	/** If best mask is found.
	 __Boolean__ Speciffies mask searching strategy:
	- __true__ - estimates best mask (as QR-Code spec recomends by default) but may be extremally slow
	- __false__ - check only one mask (specified by __QR_DEFAULT_MASK__), gives significant performance boost but (propably) results in worst quality codes
	*/

	/** Maximum allowed png image width (in pixels).
	 __Integer__ Maximal width/height of generated raster image.
	Tune to make sure GD and PHP can handle such big images.
	*/
	public const QR_PNG_MAXIMUM_SIZE = 1024;

	/* ----------------------------------------------------
	 * qrconst.php
	 */
	/** @name QR-Code Encoding Modes */
	/** @{ */

	/** null encoding, used when no encoding was speciffied yet */
	public const QR_MODE_NUL = -1;
	/** Numerical encoding, only numbers (0-9) */
	public const QR_MODE_NUM = 0;
	/** AlphaNumerical encoding, numbers (0-9) uppercase text (A-Z) and few special characters (space, $, %, *, +, -, ., /, :) */
	public const QR_MODE_AN = 1;
	/** 8-bit encoding, raw 8 bit encoding */
	public const QR_MODE_8 = 2;
	/** Kanji encoding */
	public const QR_MODE_KANJI = 3;
	/** Structure, internal encoding for structure-related data */
	public const QR_MODE_STRUCTURE = 4;
	/**@}*/

	/** @name QR-Code Levels of Error Correction
    Constants speciffy ECC level from lowest __L__ to the highest __H__.
    Higher levels are recomended for Outdoor-presented codes, but generates bigger codes.
	 */
	/** @{*/
	/** ~7% of codewords can be restored */
	public const QR_ECLEVEL_L = 0;
	/** ~15% of codewords can be restored */
	public const QR_ECLEVEL_M = 1;
	/** ~25% of codewords can be restored */
	public const QR_ECLEVEL_Q = 2;
	/** ~30% of codewords can be restored */
	public const QR_ECLEVEL_H = 3;
	/** @}*/

	/** @name QR-Code Supported output formats */
	/** @{*/
	public const QR_FORMAT_TEXT = 0;
	public const QR_FORMAT_PNG = 1;
	/** @}*/

	/** @name Legacy Encoding modes (characters which can be encoded in QRcode) */
	/** @{*/
	/** Encoding mode */
	public const QR_MODE_NL = -1;
	/** Encoding mode numeric (0-9). 3 characters are encoded to 10bit length. In theory, 7089 characters or less can be stored in a QRcode. */
	public const QR_MODE_NM = 0;
	/** Encoding mode alphanumeric (0-9A-Z $%*+-./:) 45characters. 2 characters are encoded to 11bit length. In theory, 4296 characters or less can be stored in a QRcode. */
	//public const QR_MODE_AN = 1; duplicate
	/** Encoding mode 8bit byte data. In theory, 2953 characters or less can be stored in a QRcode. */
	public const QR_MODE_8B = 2;
	/** Encoding mode KANJI. A KANJI character (multibyte character) is encoded to 13bit length. In theory, 1817 characters or less can be stored in a QRcode. */
	public const QR_MODE_KJ = 3;
	/** Encoding mode STRUCTURED (currently unsupported) */
	public const QR_MODE_ST = 4;
	/** @}*/

	/** @name Version information */
	/** @{*/
	/** Maximum QR Code version. */
	public const QRSPEC_VERSION_MAX = 40;
	/** Maximum matrix size for maximum version (version 40 is 177*177 matrix). */
	public const QRSPEC_WIDTH_MAX = 177;
	/** @}*/

	/** @name Matrix indices for capacity array */
	/** @{*/
	/** Matrix index to get width from $capacity array. */
	public const QRCAP_WIDTH = 0;
	/** Matrix index to get number of words from $capacity array. */
	public const QRCAP_WORDS = 1;
	/** Matrix index to get remainder from $capacity array. */
	public const QRCAP_REMINDER = 2;
	/** Matrix index to get error correction level from $capacity array. */
	public const QRCAP_EC = 3;
	/** @}*/

	/** @name Structure constants */
	/** @{*/
	/** Number of header bits for structured mode */
	public const STRUCTURE_HEADER_BITS = 20;
	/** Max number of symbols for structured mode */
	public const MAX_STRUCTURED_SYMBOLS = 16;
	/** @}*/

	/** @name Mask pattern evaluation constants */
	/** @{*/
	/** Down point base value for case 1 mask pattern (concatenation of same color in a line or a column) */
	public const N1 = 3;
	/** Down point base value for case 2 mask pattern (module block of same color) */
	public const N2 = 3;
	/** Down point base value for case 3 mask pattern (1:1:3:1:1(dark:bright:dark:bright:dark)pattern in a line or a column) */
	public const N3 = 40;
	/** Down point base value for case 4 mask pattern (ration of dark modules in whole) */
	public const N4 = 10;
	/** @}*/

	/** @name Optimization settings */
	/** @{*/
	/** if true, estimates best mask (spec. default, but extremally slow; set to false to significant performance boost but (propably) worst quality code */
	public const QR_FIND_BEST_MASK = true;
	/** if false, checks all masks available, otherwise value tells count of masks need to be checked, mask id are got randomly */
	public const QR_FIND_FROM_RANDOM = 2;
	/** when QR_FIND_BEST_MASK === false */
	public const QR_DEFAULT_MASK = 2;
	/** @}*/

	/* ----------------------------------------------------
	* qrarea.php
	*/
	public const QR_AREA = true;

	//      N
	//    W  E
	//     S
	public const QR_AREA_N = 0;
	public const QR_AREA_E = 1;
	public const QR_AREA_S = 2;
	public const QR_AREA_W = 3;

	public const QR_AREA_X = 0;
	public const QR_AREA_Y = 1;

	public const QR_AREA_TRACKER = 0;
	public const QR_AREA_PATH = 1;
	public const QR_AREA_POINT = 2;
	public const QR_AREA_RECT = 3;
	public const QR_AREA_LSHAPE = 4;

	/* ----------------------------------------------------
	 * qrtools.php
	 */
	public const QR_IMAGE = true;
}
