import jalaliDateTimePickerFormComponent from './components/jalali-date-time-picker';

document.addEventListener('alpine:init', () => {
    window.Alpine.plugin(jalaliDateTimePickerFormComponent);
});
