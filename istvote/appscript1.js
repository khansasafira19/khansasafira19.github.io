function doPost(e) {
  var sheet = SpreadsheetApp.getActiveSpreadsheet().getSheetByName("votes");
  var data = JSON.parse(e.postData.contents);
  var nip = data.nip;  // ganti email jadi nip
  var candidate = data.candidate;

  // cek duplikat vote (kolom ke-3 sekarang untuk NIP)
  var nips = sheet.getRange(2, 3, sheet.getLastRow() - 1, 1).getValues().flat();
  if (nips.indexOf(nip) !== -1) {
    return ContentService.createTextOutput(JSON.stringify({
      status: "error",
      message: "Anda sudah melakukan voting!"
    })).setMimeType(ContentService.MimeType.JSON);
  }

  // simpan: [timestamp, kandidat, nip]
  // sheet.appendRow([new Date(), candidate, nip]);
  sheet.appendRow([new Date(), candidates.join(", "), nip]);

  return ContentService.createTextOutput(JSON.stringify({
    status: "success",
    message: "Vote berhasil disimpan!"
  })).setMimeType(ContentService.MimeType.JSON);
}

function doGet(e) {
  var sheet = SpreadsheetApp.getActiveSpreadsheet().getSheetByName("votes");
  var data = sheet.getDataRange().getValues();
  var counts = {};

  for (var i = 1; i < data.length; i++) {
    var candidate = data[i][1]; // kolom kandidat
    if (!counts[candidate]) counts[candidate] = 0;
    counts[candidate]++;
  }

  return ContentService.createTextOutput(JSON.stringify(counts))
    .setMimeType(ContentService.MimeType.JSON);
}