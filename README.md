Blockstrap Blockchain File Uploader
===================================

The Blockchain File Uploader allows you to store hashes of file contents to any of the eight blockchains supported by the [Blockstrap API](http://docs.blockstrap.com/en/api/). For those chains with an `op_return` limit of more than 40 bytes, and at an extra cost to the user, it is also possible to upload the file to Amazon S3 (with an optional password) and also encode that additional information into the transactions `op_return`.