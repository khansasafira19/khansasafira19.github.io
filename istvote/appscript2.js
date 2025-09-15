function doPost(e) {
  var sheet = SpreadsheetApp.getActiveSpreadsheet().getSheetByName("votes");
  var data = JSON.parse(e.postData.contents);
  var nip = data.nip;
  var candidate = data.candidate;

  // Check for duplicate votes (same NIP and same candidate)
  var votesData = sheet.getRange(2, 1, sheet.getLastRow()-1, 3).getValues();
  var hasAlreadyVoted = votesData.some(row => row[2] === nip && row[1] === candidate);
  
  if (hasAlreadyVoted) {
    return ContentService.createTextOutput(JSON.stringify({
      status: "error",
      message: "Anda sudah memilih kandidat ini!"
    })).setMimeType(ContentService.MimeType.JSON);
  }

  // Save the vote: [timestamp, candidate, nip]
  sheet.appendRow([new Date(), candidate, nip]);

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
    var candidate = data[i][1]; // candidate column
    if (!counts[candidate]) counts[candidate] = 0;
    counts[candidate]++;
  }

  return ContentService.createTextOutput(JSON.stringify(counts))
    .setMimeType(ContentService.MimeType.JSON);
}