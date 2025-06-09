// The rest of the code goes here!
$("#save-button").click(function () {
    let customizeTextValueObj = document.getElementById("inp");
    if(customizeTextValueObj !== null && typeof customizeTextValueObj !== "undefined"){
		let customizeTextValue = customizeTextValueObj.value;
		localStorage.setItem("customizeText", customizeTextValue);
	}
});
$(document).ready(function () {
    const urlParameter = window.location.href;
    var url = new URL(urlParameter);
    var urlShare = url.searchParams.get("edit");
    if (urlShare) {
        $(".showAfterParams").show();
    } else {
        $(".showAfterParams").hide();
    }
});

let canvas;
let ctx, xCoordinate, yCoordinate, textColor, fontstyle, fontfamily, fontweight, fontsize, textArea, nameLength, translate, lineHeight, x, y;

if (document.querySelectorAll(".editCustomImage").length > 0) {
    document.querySelector('textarea#inp').addEventListener('input', function () {
        this.nextElementSibling.textContent = this.getAttribute('maxlength') - this.value.length;
        document.getElementById('save-button').disabled = this.value.length === 0;
    });

    fontsize = document.getElementById("text-img").getAttribute("font-size");
    fontstyle = document.getElementById("text-img").getAttribute("font-style");
    fontfamily = document.getElementById("text-img").getAttribute("font-family");
    fontweight = document.getElementById("text-img").getAttribute("font-weight");
    fontweight = parseInt(fontweight);
    xCoordinate = document.getElementById("text-img").getAttribute("xCoordinate");
    yCoordinate = document.getElementById("text-img").getAttribute("yCoordinate");
    textColor = document.getElementById("text-img").getAttribute("text-color");
    textArea = document.getElementById("text-img").getAttribute("textWidth");
    lineHeight = document.getElementById("text-img").getAttribute("lineHeight");
    lineHeight = parseInt(lineHeight);
    nameLength = document.getElementById("text-img").getAttribute("nameLength");
    translate = document.getElementById("text-img").getAttribute("translate");

document.addEventListener('DOMContentLoaded', function () {
    let maxLength = nameLength;
    let textarea = document.querySelector('textarea');
    let saveButton = document.getElementById('save-button');
    let charCount = document.querySelector(".charCount");

    if (textarea.value.length === 0) {
        saveButton.classList.add('disabled');
    }

    textarea.addEventListener('input', function () {
        let textlen = maxLength - textarea.value.length;
        charCount.textContent = textlen + " character(s) remaining";

        if (textarea.value.length > 0) {
            saveButton.classList.remove('disabled');
        } else {
            saveButton.classList.add('disabled');
        }
    });
});

$("#save-button").click(function (event) {
     event.preventDefault();
            canvas = document.getElementById('canvasCustom');
            ctx = canvas.getContext('2d');
            canvas.width = document.getElementById('text-img').offsetWidth;
            canvas.crossOrigin = "Anonymous";
            canvas.height = document.getElementById('text-img').offsetHeight;
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.drawImage(document.getElementById('text-img'), 0, 0, canvas.width, canvas.height);

            ctx.font = fontweight + ' ' + fontstyle + ' ' + fontsize + 'px ' + fontfamily;
            ctx.textAlign = "center";
            ctx.strokeStyle = textColor;
            ctx.lineWidth = 2;
            ctx.fillStyle = textColor;
            ctx.rotate(translate * Math.PI / 180);
            ctx.bacgroundColor = "rgba(255,255,255,0.5)";
            y = parseInt(yCoordinate);
            x = xCoordinate;

            function wrapText(context, texts, a, b, textAreas, lineHeights) {
                let words = texts.split(" ");
                let line = "";
                for (let n = 0; n < words.length; n++) {
                    let testLine = line + words[n] + " ";
                    let metrics = context.measureText(testLine);
                    let testWidth = metrics.width;
                    if (testWidth > textAreas && n > 0) {
                        context.fillText(line, a, b);
                        line = words[n] + " ";
                        b += (lineHeights);
                    } else {
                        line = testLine;
                    }
                }
                context.fillText(line, a, b);
            }

            let text = document.getElementById("inp").value;

            wrapText(ctx, text, x, y, textArea, lineHeight);

            let url = getBase64Image();
            document.getElementById("generatedCanvasImage").src = url;
            let generatedImageUrl = document.getElementById("generatedCanvasImage").src;
            localStorage.setItem("customImageUrl", generatedImageUrl);
            document.getElementById("imageData").value = generatedImageUrl;
            document.getElementById("imageForm").submit();
    });
}


$("#download-button-custom").click(function () {
    let base64Image = localStorage.getItem("customImageUrl");
    downloadURI(base64Image, 'cake-image.png');
});
function getBase64Image() {
    return canvas.toDataURL("image/png");
}
function downloadURI(uri, name) {
    if (navigator.msSaveBlob) {
        const blob = dataURItoBlob(uri);
        return navigator.msSaveBlob(blob, name);
    }
    const link = document.createElement('a');
    link.download = name;
    link.href = uri;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

function dataURItoBlob(dataurl) {
    const parts = dataurl.split(','), mime = parts[0].match(/:\(\.*?\)\;/)[1];
    if (parts[0].indexOf('base64') !== -1) {
        const bstr = atob(parts[1]);
        let n = bstr.length;
        const u8arr = new Uint8Array(n);

        while (n--) {
            u8arr[n] = bstr.charCodeAt(n);
        }
        return new Blob([u8arr], {type: mime});
    } else {
        const raw = decodeURIComponent(parts[1]);
        return new Blob([raw], {type: mime});
    }
}

$("#share-facebook-button-custom").click(function () {
    let src = $('#finalProductImage').attr('src');
    let alt = $('#finalProductImage').attr('alt');
    window.open('https://www.facebook.com/sharer.php?u=' + encodeURIComponent(src) + '&t=' + encodeURIComponent(alt), 'sharer', 'toolbar=0,status=0,width=626,height=436');
    return false;
});
$("#share-twitter-button-custom").click(function () {
    const twitterUrl = window.location.href;
    const result = twitterUrl.split('?')[0];
    window.open('https://twitter.com/intent/tweet?url=' + result );
    return false;
});
$("#share-whatsapp-button-custom").click(function () {
    const whatSappUrl = window.location.href;
    const result = whatSappUrl.split('?')[0];
    window.open('https://api.whatsapp.com/send?text=' + result); 
    return false;
});
$(window).on('load', function () {
    if ($('.finalCustomProductImage').length) {
        let customizeText = localStorage.getItem("customizeText");
        if (customizeText !== undefined) {
            $('#inpSave').val(customizeText);
        }
    }
});