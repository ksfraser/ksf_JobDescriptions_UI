# Architecture - ksf_JobDescriptions_UI

## Document Information
- **Module**: ksf_JobDescriptions_UI
- **Version**: 1.0.0
- **Date**: 2026-05-11
- **Status**: Implemented
- **Author**: KSFII Development Team

---

## 1. Module Overview

ksf_JobDescriptions_UI provides the WordPress ESS user interface for JobDescriptions functionality.

### 1.1 Namespace
`Ksfraser\JobDescriptionsUI`

### 1.2 Adapter Pattern
```
ksf_JobDescriptions (Business Logic)
    ↓
ksf_JobDescriptions_UI (WordPress ESS Adapter)
    ↓
    WordPress ESS Portal
```

---

## 2. Component Architecture

### 2.1 Presenter Layer

| Presenter | Description |
|-----------|-------------|
| ListPresenter | List page logic |
| FormPresenter | Form handling |
| DetailPresenter | Detail view logic |

### 2.2 AJAX Handlers

| Endpoint | Action | Description |
|----------|--------|-------------|
| ksf_JobDescriptions_list | getList | Get items |
| ksf_JobDescriptions_save | saveItem | Save item |
| ksf_JobDescriptions_delete | deleteItem | Delete item |

---

## 3. Integration

### Consumed From
| Module | Interface |
|--------|-----------|
| ksf_JobDescriptions | Business logic |

### WordPress Integration
| Hook | Description |
|------|-------------|
| wp_ajax_ksf_JobDescriptions | AJAX handlers |
| ksf_JobDescriptions_template | Page templates |

---

*Document Version: 1.0.0*
*Last Updated: 2026-05-11*
