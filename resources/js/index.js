import DatePicker from './components/DatePicker';
import FilterSelector from './components/FilterSelector';
import SearchableFilter from './components/SearchableFilter';
import SelectFilter from './components/SelectFilter';

Nova.booting((Vue, router) => {
  Vue.component('date-picker', DatePicker);
  Vue.component('filter-selector', FilterSelector);
  Vue.component('searchable-filter', SearchableFilter);
  Vue.component('select-filter', SelectFilter);
});
