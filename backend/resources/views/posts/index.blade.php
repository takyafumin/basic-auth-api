@extends('layouts.base')

@section('content')

<table id="list" data-url="{{ $url }}" class="table-auto">
    <thead>
        <tr>
            <th>タイトル</th>
            <th>内容</th>
        </tr>
    </thead>
    <tbody id="list-tbody"></tbody>
</table>

<script>
$(function() {


    function initialLoad() {
        const $url_api = $('#list').data('url');

        $.ajax({
            type: 'get',
            url: $url_api,
            dataType: 'json'
        })
        .then((...args) => {
            const [data, textStatus, jqXHR] = args;
            displayDataTable('#list-tbody', data);
        })
        .catch((...args) => {
            const [jqXHR, textStatus, errorThrown] = args;
            console.log('fail', jqXHR.status);
        })
    }

    function displayDataTable(selector, data) {
        var rows = '';
        $.each(data, function(i, entity) {
            rows += "<tr>";
            rows += `<td>${entity.title}</td>`;
            rows += `<td>${(entity.notes).substring(0, 40)}</td>`;
            rows += "</tr>";
        })
        $(selector).append(rows);
    }

    initialLoad();
});
</script>
@endsection
