




The elements can be taken from the webpage using
elements = document.querySelectorAll('[id^="ergebnisliste-item-"]');
it searches by id and uses the start of the selector





// 1. Grab every element starting with the fixed prefix
const allElements = document.querySelectorAll('[id^="ergebnisliste-item-"]');

// 2. Filter into elements WITHOUT a suffix (just numbers at the end)
const withoutSuffix = Array.from(allElements).filter(el => {
    return /^ergebnisliste-item-\d+$/.test(el.id); 
});

// 3. Filter into elements WITH a suffix (numbers followed by text)
const withSuffix = Array.from(allElements).filter(el => {
    return /^ergebnisliste-item-\d+-.+$/.test(el.id); 
});

// Quick test to see the results in your console
console.log("Without Suffix:", withoutSuffix);
console.log("With Suffix:", withSuffix);


withSuffix[16].parentElement.parentElement



withSuffix[18].parentElement.parentElement.getElementsByClassName('ba-icon-location-full')


Location can be obtained using
withSuffix[18].parentElement.parentElement.getElementsByClassName('ba-icon-location-full')[0].children[1]

get the title
document.getElementById('eintrag-18-titel').children[1]

the company
document.getElementById('eintrag-18-firma')

the date
document.getElementById('eintrag-18-veroeffentlichungsdatum')

the location
document.getElementById('eintrag-18-arbeitsort').children[1]

the duration
document.getElementById('eintrag-26-befristung').children[1]




full or partial time -> Vollzeit, Teilzeit, Minijob
document.getElementById('eintrag-26-anstellungsart').children[1]


start date
document.getElementById('eintrag-31-eintrittsdatum')


quereinstieg
document.getElementById('eintrag-31-quereinstieg')

payment
document.getElementById('eintrag-32-gehaltsspanne')

change/update date
document.getElementById('eintrag-33-aenderungsdatum')


homeoffice
document.getElementById('eintrag-9-homeoffice')

link
document.getElementById('ergebnisliste-item-5').getAttribute('href')















in the item page
document.getElementById('detail-arbeitsorte-arbeitsort-0').innerText

the description it is \n delimited
document.getElementById('detail-beschreibung-text-container').innerText

get array of the inner text
document.getElementById('detail-beschreibung-text-container').innerText.split('\n')


locations
document.querySelectorAll('[id^="detail-arbeitsorte-arbeitsort-"]');

document.querySelectorAll('[id^="detail-arbeitsorte-arbeitsort-"]')[3].innerText


Berufsbezeichnung
document.querySelectorAll('[id^="detail-kopfbereich-beruf-"]');
document.querySelectorAll('[id^="detail-kopfbereich-beruf-"]')[0].innerText



ANU
document.getElementsByClassName('anu-tag')[0]



