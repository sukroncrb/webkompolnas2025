<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/php/abiesoft/vendor/abiesoft/Http/../../../templates/web/regulasi/uud45.latte */
final class Template_0fcbf04ff9 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/php/abiesoft/vendor/abiesoft/Http/../../../templates/web/regulasi/uud45.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 20 */;
		$this->renderBlock('js', get_defined_vars()) /* line 225 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = '../main.latte';
		return get_defined_vars();
	}


	/** {block css} on line 2 */
	public function blockCss(array $ʟ_args): void
	{
		echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table.min.css">

<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.29.0/tableExport.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table-locale-all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/extensions/export/bootstrap-table-export.min.js"></script>

<style>
  .select,
  #locale {
    width: 100%;
  }
  .like {
    margin-right: 10px;
  }
</style>
';
	}


	/** {block content} on line 20 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<section>
    <div class="banner">
        <div class="container konten">
            <div class="breadcrumb">
                <ul>
                    <li><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 26 */;
		echo '\'><span>Home</span></a></li>
                    <li><span>Regulasi</span></li>
                    <li><span>UUD 1945</span></li>
                </ul>
            </div>
            <h3>UUD 1945</h1>
        </div>
    </div>
    <div class="container konten page">
        <div>
            <div class="select">
                <select
                    id="locale"
                    class="form-control"
                >
                    <option value="af-ZA">
                    af-ZA
                    </option>
                    <option value="ar-SA">
                    ar-SA
                    </option>
                    <option value="ca-ES">
                    ca-ES
                    </option>
                    <option value="cs-CZ">
                    cs-CZ
                    </option>
                    <option value="da-DK">
                    da-DK
                    </option>
                    <option value="de-DE">
                    de-DE
                    </option>
                    <option value="el-GR">
                    el-GR
                    </option>
                    <option
                    value="en-US"
                    selected
                    >
                    en-US
                    </option>
                    <option value="es-AR">
                    es-AR
                    </option>
                    <option value="es-CL">
                    es-CL
                    </option>
                    <option value="es-CR">
                    es-CR
                    </option>
                    <option value="es-ES">
                    es-ES
                    </option>
                    <option value="es-MX">
                    es-MX
                    </option>
                    <option value="es-NI">
                    es-NI
                    </option>
                    <option value="es-SP">
                    es-SP
                    </option>
                    <option value="et-EE">
                    et-EE
                    </option>
                    <option value="eu-EU">
                    eu-EU
                    </option>
                    <option value="fa-IR">
                    fa-IR
                    </option>
                    <option value="fi-FI">
                    fi-FI
                    </option>
                    <option value="fr-BE">
                    fr-BE
                    </option>
                    <option value="fr-FR">
                    fr-FR
                    </option>
                    <option value="he-IL">
                    he-IL
                    </option>
                    <option value="hr-HR">
                    hr-HR
                    </option>
                    <option value="hu-HU">
                    hu-HU
                    </option>
                    <option value="id-ID">
                    id-ID
                    </option>
                    <option value="it-IT">
                    it-IT
                    </option>
                    <option value="ja-JP">
                    ja-JP
                    </option>
                    <option value="ka-GE">
                    ka-GE
                    </option>
                    <option value="ko-KR">
                    ko-KR
                    </option>
                    <option value="ms-MY">
                    ms-MY
                    </option>
                    <option value="nb-NO">
                    nb-NO
                    </option>
                    <option value="nl-NL">
                    nl-NL
                    </option>
                    <option value="pl-PL">
                    pl-PL
                    </option>
                    <option value="pt-BR">
                    pt-BR
                    </option>
                    <option value="pt-PT">
                    pt-PT
                    </option>
                    <option value="ro-RO">
                    ro-RO
                    </option>
                    <option value="ru-RU">
                    ru-RU
                    </option>
                    <option value="sk-SK">
                    sk-SK
                    </option>
                    <option value="sv-SE">
                    sv-SE
                    </option>
                    <option value="th-TH">
                    th-TH
                    </option>
                    <option value="tr-TR">
                    tr-TR
                    </option>
                    <option value="uk-UA">
                    uk-UA
                    </option>
                    <option value="ur-PK">
                    ur-PK
                    </option>
                    <option value="uz-Latn-UZ">
                    uz-Latn-UZ
                    </option>
                    <option value="vi-VN">
                    vi-VN
                    </option>
                    <option value="zh-CN">
                    zh-CN
                    </option>
                    <option value="zh-TW">
                    zh-TW
                    </option>
                </select>
                </div>

                <div id="toolbar">
                <button
                    id="remove"
                    class="btn btn-danger"
                    disabled
                >
                    <i class="fa fa-trash"></i> Delete
                </button>
                </div>
                <table
                id="table"
                data-toolbar="#toolbar"
                data-search="true"
                data-show-refresh="true"
                data-show-toggle="true"
                data-show-fullscreen="true"
                data-show-columns="true"
                data-show-columns-toggle-all="true"
                data-detail-view="true"
                data-show-export="true"
                data-click-to-select="true"
                data-detail-formatter="detailFormatter"
                data-minimum-count-columns="2"
                data-show-pagination-switch="true"
                data-pagination="true"
                data-id-field="id"
                data-page-list="[10, 25, 50, 100, all]"
                data-show-footer="true"
                data-side-pagination="server"
                data-url="https://examples.wenzhixin.net.cn/examples/bootstrap_table/data"
                data-response-handler="responseHandler"
                >
                </table>
        </div>
    </div>
</section>
';
	}


	/** {block js} on line 225 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script>
  const $table = $(\'#table\')
  const $remove = $(\'#remove\')
  let selections = []

  function getIdSelections () {
    return $.map($table.bootstrapTable(\'getSelections\'), function (row) {
      return row.id
    })
  }

  window.responseHandler = res => {
    $.each(res.rows, function (i, row) {
      row.state = $.inArray(row.id, selections) !== -1
    })
    return res
  }

  window.detailFormatter = (index, row) => {
    const html = []

    $.each(row, function (key, value) {
      html.push(`<p><b>${key}:</b> ${value}</p>`)
    })
    return html.join(\'\')
  }

  function operateFormatter () {
    return [
      \'<a class="like" href="javascript:void(0)" title="Like">\',
      \'<i class="fa fa-heart"></i>\',
      \'</a>  \',
      \'<a class="remove" href="javascript:void(0)" title="Remove">\',
      \'<i class="fa fa-trash"></i>\',
      \'</a>\'
    ].join(\'\')
  }

  window.operateEvents = {
    \'click .like\' (e, value, row) {
      alert(`You click like action, row: ${JSON.stringify(row)}`)
    },
    \'click .remove\' (e, value, row) {
      $table.bootstrapTable(\'remove\', {
        field: \'id\',
        values: [row.id]
      })
    }
  }

  function totalTextFormatter () {
    return \'Total\'
  }

  function totalNameFormatter (data) {
    return data.length
  }

  function totalPriceFormatter (data) {
    const field = this.field

    return `$${data.map(function (row) {
      return +row[field].substring(1)
    }).reduce(function (sum, i) {
      return sum + i
    }, 0)}`
  }

  function initTable () {
    $table.bootstrapTable(\'destroy\').bootstrapTable({
      height: 550,
      locale: $(\'#locale\').val(),
      columns: [
        [
          {
            field: \'state\',
            checkbox: true,
            rowspan: 2,
            align: \'center\',
            valign: \'middle\'
          },
          {
            title: \'Item ID\',
            field: \'id\',
            rowspan: 2,
            align: \'center\',
            valign: \'middle\',
            sortable: true,
            footerFormatter: totalTextFormatter
          },
          {
            title: \'Item Detail\',
            colspan: 3,
            align: \'center\'
          }
        ],
        [
          {
            field: \'name\',
            title: \'Item Name\',
            sortable: true,
            footerFormatter: totalNameFormatter,
            align: \'center\'
          },
          {
            field: \'price\',
            title: \'Item Price\',
            sortable: true,
            align: \'center\',
            footerFormatter: totalPriceFormatter
          },
          {
            field: \'operate\',
            title: \'Item Operate\',
            align: \'center\',
            clickToSelect: false,
            events: window.operateEvents,
            formatter: operateFormatter
          }
        ]
      ]
    })
    $table.on(\'check.bs.table uncheck.bs.table \' +
      \'check-all.bs.table uncheck-all.bs.table\',
    function () {
      $remove.prop(\'disabled\', !$table.bootstrapTable(\'getSelections\').length)

      // save your data, here just save the current page
      selections = getIdSelections()
      // push or splice the selections if you want to save all data selections
    })
    $table.on(\'all.bs.table\', function (e, name, args) {
      console.log(name, args)
    })
    $remove.click(function () {
      const ids = getIdSelections()

      $table.bootstrapTable(\'remove\', {
        field: \'id\',
        values: ids
      })
      $remove.prop(\'disabled\', true)
    })
  }

  $(function() {
    initTable()

    $(\'#locale\').change(initTable)
  })
</script>
';
	}
}
