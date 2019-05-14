@if ($paginator->hasPages())
    <el-pagination background
                   @current-change="(p) => { __load(__url.param('{{ $paginator->url(0) }}', '{{ $paginator->getPageName() }}='+p)) }"
                   :current-page="{{ $paginator->currentPage() }}"
                   :page-size="{{ $paginator->perPage() }}"
                   layout="total, prev, pager, next, jumper"
                   :total="{{ $paginator->total() }}">
    </el-pagination>
@endif

