$(document).ready(function() {
    let speech = new SpeechSynthesisUtterance();
    speech.lang = "en";
    let voices = [];

    window.speechSynthesis.onvoiceschanged = () => {
        voices = window.speechSynthesis.getVoices();
        // Set the default voice to the first available voice
        speech.voice = voices[0];
    };

    $("#voices").change(function() {
        // Set the speech voice based on the selected option
        speech.voice = voices[$(this).val()];
    });

    $("#start").click(function() {
        // Show cancel button and hide start button
        $("#cancel").show();
        $(this).hide();

        var text = "";

        // Concatenate all the text content to be spoken
        ["#i1", "#i2", "#i3", "#i4", "#i5", "#i6", "#i7", "#ptext1", "#ptext2", "#ptext3", "#ptext4", "#topic1"].forEach(selector => {
            if ($(selector).length) {
                text += $(selector).html();
            }
        });

        speech.text = text;

        // Speak the text
        window.speechSynthesis.speak(speech);
    });

    $("#cancel").click(function() {
        // Cancel speech synthesis
        window.speechSynthesis.cancel();

        // Hide cancel button and show start button
        $(this).hide();
        $("#start").show();
    });
});