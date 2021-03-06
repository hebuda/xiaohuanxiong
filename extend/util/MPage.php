<?php
/**
 * Created by PhpStorm.
 * User: hiliq
 * Date: 2019/3/12
 * Time: 11:00
 */

namespace Util;

use think\Paginator;
class MPage extends Paginator
{
    public function __construct($items, $listRows, $currentPage = null, $total = null, $simple = false, array $options = [])
    {
        parent::__construct($items, $listRows, $currentPage, $total, $simple, $options);
    }

    //首页
    protected function home()
    {

    }

    //上一页
    protected function prev()
    {
        if ($this->currentPage() > 1) {
            return "<a class='paginate-btn' href='" . $this->url($this->currentPage - 1) . "' title='上一页'> < </a>";
        } else {
            return "<a class='paginate-disabled-btn' href='#'> < </a>";
        }
    }

    //下一页
    protected function next()
    {
        if ($this->hasMore) {
            return "<a class='paginate-btn' href='" . $this->url($this->currentPage + 1) . "' title='下一页'> > </a>";
        } else {
            return "<a class='paginate-disabled-btn' href='#'> > </a>";
        }
    }

    //尾页
    protected function last()
    {

    }

    //统计信息
    protected function info()
    {

    }

    /**
     * 页码按钮
     * @return string
     */
    protected function getLinks()
    {

    }

    /**
     * 渲染分页html
     * @return mixed
     */
    public function render()
    {
        if ($this->hasPages()) {
            if ($this->simple) {
                return sprintf(
                    '%s<div class="pagination">%s %s %s</div>',
                    $this->css(),
                    $this->prev(),
                    $this->getLinks(),
                    $this->next()
                );
            } else {
                return sprintf(
                    '%s<div class="pagination">%s %s %s %s %s %s</div>',
                    $this->css(),
                    $this->home(),
                    $this->prev(),
                    $this->getLinks(),
                    $this->next(),
                    $this->last(),
                    $this->info()
                );
            }
        }
    }

    /**
     * 生成一个可点击的按钮
     *
     * @param  string $url
     * @param  int $page
     * @return string
     */
    protected function getAvailablePageWrapper($url, $page)
    {
    }

    /**
     * 生成一个禁用的按钮
     *
     * @param  string $text
     * @return string
     */
    protected function getDisabledTextWrapper($text)
    {
    }

    /**
     * 生成一个激活的按钮
     *
     * @param  string $text
     * @return string
     */
    protected function getActivePageWrapper($text)
    {
    }

    /**
     * 生成省略号按钮
     *
     * @return string
     */
    protected function getDots()
    {

    }

    /**
     * 批量生成页码按钮.
     *
     * @param  array $urls
     * @return string
     */
    protected function getUrlLinks(array $urls)
    {

    }

    /**
     * 生成普通页码按钮
     *
     * @param  string $url
     * @param  int $page
     * @return string
     */
    protected function getPageLinkWrapper($url, $page)
    {

    }

    /**
     * 分页样式
     */
    protected function css()
    {

    }
}