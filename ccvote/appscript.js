function doPost(e) {
  var sheet = SpreadsheetApp.getActiveSpreadsheet().getSheetByName("votes");
  var data = JSON.parse(e.postData.contents);
  var nip = data.nip;
  var candidates = data.candidates; // This is now an array of 3 candidates

  // Check if NIP has already voted
  var nips = sheet.getRange(2, 3, sheet.getLastRow() - 1, 1).getValues().flat();
  if (nips.indexOf(nip) !== -1) {
    return ContentService.createTextOutput(JSON.stringify({
      status: "error",
      message: "Anda sudah melakukan voting!"
    })).setMimeType(ContentService.MimeType.JSON);
  }

  // Save each candidate as a separate row
  candidates.forEach(candidate => {
    sheet.appendRow([new Date(), candidate, nip]);
  });

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
    var candidate = data[i][1]; // column candidate
    if (!counts[candidate]) counts[candidate] = 0;
    counts[candidate]++;
  }

  return ContentService
    .createTextOutput(JSON.stringify(counts))
    .setMimeType(ContentService.MimeType.JSON);  // ✅ No .setHeader()
}