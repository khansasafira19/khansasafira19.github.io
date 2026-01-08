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

function getWilayahMap() {
  const pegawai = SpreadsheetApp.getActive()
    .getSheetByName("pegawai")
    .getDataRange()
    .getValues();

  const map = {};
  for (let i = 1; i < pegawai.length; i++) {
    map[pegawai[i][0]] = pegawai[i][2]; // NIP → Wilayah
  }
  return map;
}

function doGet(e) {
  const ss = SpreadsheetApp.getActive();
  const votesSheet = ss.getSheetByName("votes");
  const data = votesSheet.getDataRange().getValues();

  const wilayahMap = getWilayahMap();

  const candidateCounts = {};
  const wilayahVoters = {};
  const uniqueNip = new Set();

  for (let i = 1; i < data.length; i++) {
    const candidate = data[i][1];
    const nip = data[i][2];

    // candidate count
    candidateCounts[candidate] = (candidateCounts[candidate] || 0) + 1;

    // unique voter per wilayah
    if (!uniqueNip.has(nip)) {
      uniqueNip.add(nip);
      const wilayah = wilayahMap[nip];
      if (wilayah) {
        wilayahVoters[wilayah] = (wilayahVoters[wilayah] || 0) + 1;
      }
    }
  }

  return ContentService.createTextOutput(
    JSON.stringify({
      candidates: candidateCounts,
      wilayah: wilayahVoters
    })
  ).setMimeType(ContentService.MimeType.JSON);
}