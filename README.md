# REDCap External Module: QR Code Links

Converts any anchor tags with the class `em-qr-code` on a survey or data entry form into a QR Code.

`<a href="https://www.mcri.edu.au/" target="_blank" class="em-qr-code">https://www.mcri.edu.au/</a>`

If the anchor also has the class `em-qr-code-this` then the href attribute is overwritten with the current URL.

`<a href="#" target="_blank" class="em-qr-code em-qr-code-this">This Page</a>`
