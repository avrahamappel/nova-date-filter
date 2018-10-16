import DatePicker from './components/DatePicker';
import FilterSelector from './components/FilterSelector';
import SearchableFilter from './components/SearchableFilter';

Nova.booting((Vue, router) => {
    Vue.component('date-picker', DatePicker);
    Vue.component('filter-selector', FilterSelector);
    Vue.component('searchable-filter', SearchableFilter);
});
